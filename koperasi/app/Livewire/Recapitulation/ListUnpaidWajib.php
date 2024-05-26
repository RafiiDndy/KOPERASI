<?php

namespace App\Livewire\Recapitulation;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListUnpaidWajib extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $sortColumn = 'id';
    public $sortDirection = 'desc';
    public $search = '';
    public $monthStart = '';
    public $yearStart = '';
    public $monthEnd = '';
    public $yearEnd = '';
    public $dateStart = '';
    public $dateEnd = '';

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }

        $this->yearStart = Carbon::now()->year;
        $this->monthStart = Carbon::now()->month;
        $this->yearEnd = Carbon::now()->year;
        $this->monthEnd = Carbon::now()->month;
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function sendWhatsAppMessage($wajib, $total_wajib, $no_hp, $nama, $nik)
    {
        if ($wajib == 'Unpaid') {
            $message = "> ⓘ Halo *".$nama ."* dengan NIK: *".$nik ."*, kami ingin menginformasikan bahwa anda memiliki tagihan pada koperasi sebagai berikut: *Tagihan Wajib Tersisa: Rp." . number_format((100000 - number_format($total_wajib, 2)), 2)."*";
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $no_hp,
                'message' => $message,
                'countryCode' => '62',
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Er6jhoQcG1KkfnH49#L3'
            ),
        ));

        curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
        }
        curl_close($curl);

        if (isset($error_msg)) {
            $this->flash('error', $error_msg, [
                'position' => 'center',
                'timer' => '3000',
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        } else {
            $this->flash('success', 'WhatsApp message sent successfully', [
                'position' => 'center',
                'timer' => '3000',
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        }
        return redirect(request()->header('Referer'));
    }

    public function updatingsearch(): void
    {
        $this->gotoPage(1);
    }

    public function render()
    {
        $this->dateStart = Carbon::parse($this->yearStart."-".$this->monthStart)->startOfMonth()->format('Y-m-d');
        $this->dateEnd = Carbon::parse($this->yearEnd."-".$this->monthEnd)->endOfMonth()->format('Y-m-d');

        $reports = DB::table('users AS u')
            ->leftJoinSub(
                DB::table('catatan_simpanans AS cs')
                    ->select(
                        'user_id',
                        DB::raw('SUM(CASE WHEN cs.status = "Verified" AND cs.jenis_simpanan = "Wajib" AND cs.bulan BETWEEN ? AND ? THEN cs.jumlah ELSE 0 END) AS total_wajib')
                    )
                    ->whereRaw('cs.status = "Verified"')
                    ->groupBy('user_id'),
                'cs',
                'user_id',
                '=',
                'u.id'
            )
            ->select(
                'u.*',
                DB::raw('COALESCE(cs.total_wajib, 0) AS total_wajib'),
                DB::raw('CASE
                WHEN COALESCE(cs.total_wajib, 0) >= 100000 THEN "Paid"
                ELSE "Unpaid"
            END AS status_wajib')
            )
            ->setBindings([$this->dateStart . " 00:00:00", $this->dateEnd . " 23:59:59"], 'where')
            ->where(function ($query) {
                $query->where('u.id', 'like', '%' . $this->search . '%')
                    ->orWhere('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->paginate(10);

        return view('livewire.recapitulation.list-unpaid-wajib', compact('reports'));
    }
}
