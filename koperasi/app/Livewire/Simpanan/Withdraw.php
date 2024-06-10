<?php

namespace App\Livewire\Simpanan;

use App\Models\CatatanSimpanan;
use App\Models\ShuAnggota;
use App\Models\AnggotaActivity;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Withdraw extends Component
{
    public $id;
    public $jumlah;
    public $jenis_simpanan;
    public $available_balance_pokok = 0;
    public $available_balance_wajib = 0;
    public $available_balance_sukarela = 0;
    public $withdrawalAmount;

    public $totalSimpanan;
    public $totalSimpananSeluruhAnggota;
    public $totalHarga;
    public $shus;

    use LivewireAlert;
    protected $listeners = [
        'confirmed'
    ];

    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan ' . auth()->user()->name);
        }

        $this->available_balance_pokok = CatatanSimpanan::where('user_id', $this->id)
            ->where('jenis_simpanan', 'Pokok')
            ->where(function ($query) {
                $query->where(function ($query) {
                    $query->where('jumlah', '>', 0)
                        ->where('status', 'Verified');
                })
                    ->orWhere(function ($query) {
                        $query->where('jumlah', '<', 0)
                            ->whereIn('status', ['Verified', 'menunggu verifikasi']);
                    });
            })
            ->sum('jumlah');

        $this->available_balance_wajib = CatatanSimpanan::where('user_id', $this->id)
            ->where('jenis_simpanan', 'Wajib')
            ->where(function ($query) {
                $query->where(function ($query) {
                    $query->where('jumlah', '>', 0)
                        ->where('status', 'Verified');
                })
                    ->orWhere(function ($query) {
                        $query->where('jumlah', '<', 0)
                            ->whereIn('status', ['Verified', 'menunggu verifikasi']);
                    });
            })
            ->sum('jumlah');

        $this->available_balance_sukarela = CatatanSimpanan::where('user_id', $this->id)
            ->where('jenis_simpanan', 'Sukarela')
            ->where(function ($query) {
                $query->where(function ($query) {
                    $query->where('jumlah', '>', 0)
                        ->where('status', 'Verified');
                })
                    ->orWhere(function ($query) {
                        $query->where('jumlah', '<', 0)
                            ->whereIn('status', ['Verified', 'menunggu verifikasi']);
                    });
            })
            ->sum('jumlah');

        $this->totalSimpanan = CatatanSimpanan::where('user_id', $this->id)
            ->where('status', 'Verified')
            ->sum('jumlah');

        $this->totalSimpananSeluruhAnggota = CatatanSimpanan::where('status', 'Verified')
            ->sum('jumlah');

        $this->totalHarga = AnggotaActivity::sum('total_harga');
        
        if ($this->totalSimpananSeluruhAnggota > 0 && $this->totalSimpanan > 0) {
            $this->shus = (($this->totalSimpanan / $this->totalSimpananSeluruhAnggota) * $this->totalHarga) - ShuAnggota::where('user_id',$this->id)->sum('withdrawn');
        } else {
            $this->shus = 0;
        }
    }

    public function withdraw()
    {
        $this->validate([
            'jumlah' => 'required|digits_between:1,16',
            'jenis_simpanan' => 'required|string',
        ]);

        $this->withdrawalAmount = $this->jumlah;

        switch ($this->jenis_simpanan) {
            case 'Pokok':
                $availableBalance = $this->available_balance_pokok;
                break;
            case 'Wajib':
                $availableBalance = $this->available_balance_wajib;
                break;
            case 'Sukarela':
                $availableBalance = $this->available_balance_sukarela;
                break;
            case 'Shu':
                $availableBalance = $this->shus;
                break;
            default:
                $availableBalance = 0;
        }

        if ($this->withdrawalAmount > $availableBalance) {

            $this->flash('error', 'Jumlah penarikan melebihi saldo yang tersedia!', [
                'position' => 'center',
                'timer' => '2000',
                'toast' => false,
                'timerProgressBar' => true,
            ]);

            return redirect(request()->header('Referer'));
        } 
        $this->alert('info', 'Confirm Withdrawal?', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Confirm',
            'text' => 'Are you sure to Withdraw Rp.' . $this->jumlah,
            'cancelButtonText' => 'Cancel',
            'width' => '320',
        ]);
    }

    public function confirmed()
    {
        if ($this->jenis_simpanan == 'Shu'){
            ShuAnggota::create([
                'user_id' => $this->id,
                'withdrawn' => $this->withdrawalAmount,
            ]);
        } else {
            CatatanSimpanan::create([
                'jumlah' => -$this->withdrawalAmount,
                'jenis_simpanan' => $this->jenis_simpanan,
                'user_id' => $this->id,
                'status' => 'menunggu verifikasi',
                'bukti_transfer' => '',
                'bulan' => Carbon::now()->format('Y-m-d'),
            ]);
            }

        $this->flash('success', 'Withdraw Rp. ' . $this->jumlah . ' Success!', [
            'position' => 'center',
            'timer' => '2000',
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        $this->reset(['jumlah', 'jenis_simpanan']);

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.simpanan.withdraw', [
            'available_balance_pokok' => $this->available_balance_pokok,
            'available_balance_wajib' => $this->available_balance_wajib,
            'available_balance_sukarela' => $this->available_balance_sukarela,
            'shus' => $this->shus
        ]);
    }
}
