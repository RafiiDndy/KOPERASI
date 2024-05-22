<?php

namespace App\Livewire\Recapitulation;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use App\Models\CatatanSimpanan;

class ListUnpaidPokok extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $sortColumn = 'id';
    public $sortDirection = 'desc';
    public $search = '';

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function updatingsearch(): void
    {
        $this->gotoPage(1);
    }

    public function sendWhatsAppMessage($pokok, $total_pokok, $no_hp, $nama, $nik)
    {
        if ($pokok == 'Unpaid') {
            $message = "> ⓘ Halo *" . $nama . "* dengan NIK: *" . $nik . "*, kami ingin menginformasikan bahwa anda memiliki tagihan pada koperasi sebagai berikut: *Tagihan Pokok Tersisa: Rp." . number_format((1000000 - number_format($total_pokok, 2)), 2) . "*";
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

    public function render()
    {
        $reports = User::select('users.*')
            ->leftJoinSub(
                CatatanSimpanan::select('user_id', DB::raw('SUM(CASE WHEN status = "Verified" AND jenis_simpanan = "Pokok" THEN jumlah ELSE 0 END) AS total_pokok'))
                    ->whereRaw('status = "Verified"')
                    ->groupBy('user_id'),
                'cs',
                'user_id',
                '=',
                'users.id'
            )
            ->selectRaw('COALESCE(cs.total_pokok, 0) AS total_pokok')
            ->selectRaw('CASE WHEN COALESCE(cs.total_pokok, 0) >= 1000000 THEN "Paid" ELSE "Unpaid" END AS status_pokok')
            ->where(function ($query) {
                $query->where('users.id', 'like', '%' . $this->search . '%')
                    ->orWhere('users.name', 'like', '%' . $this->search . '%')
                    ->orWhere('users.email', 'like', '%' . $this->search . '%');
            })
            ->paginate(10);

        return view('livewire.recapitulation.list-unpaid-pokok', compact('reports'));
    }
}
