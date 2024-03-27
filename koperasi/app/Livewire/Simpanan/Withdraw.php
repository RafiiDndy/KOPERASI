<?php

namespace App\Livewire\Simpanan;
use App\Models\CatatanSimpanan;
use Livewire\Component;

class Withdraw extends Component
{
    public $id;
    public $jumlah;
    public $jenis_simpanan;
    public $available_balance_pokok = 0;
    public $available_balance_wajib = 0;
    public $available_balance_sukarela = 0;
    
    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan '.auth()->user()->name);
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
            ->where('jenis_simpanan','Wajib')
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
            ->where('jenis_simpanan','Sukarela')
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
    }

    public function withdraw(){
        $this->validate([
            'jumlah' => 'required|digits_between:1,16',
            'jenis_simpanan' => 'required|string',
        ]);

        $withdrawalAmount = $this->jumlah;

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
            default:
                $availableBalance = 0;
        }
    
        if ($withdrawalAmount > $availableBalance) {
            session()->flash('error', 'Jumlah penarikan melebihi saldo yang tersedia!');
            
            if (auth()->user()->id == $this->id){
                return redirect()->route('Simpanan.index', ['id'=>$this->id]);
            } else if (auth()->user()->role == 'Pengurus'){
                return redirect()->route('Anggota.detail', ['id'=>$this->id]);
            }
        }

        CatatanSimpanan::create([
            'jumlah' => -$withdrawalAmount,
            'jenis_simpanan' => $this->jenis_simpanan,
            'user_id' => $this->id,
            'status' => 'menunggu verifikasi'
        ]);

        session()->flash('info', 'Berhasil melakukan withdraw.');
        $this->reset(['jumlah', 'jenis_simpanan']);

        if (auth()->user()->id == $this->id){
            return redirect()->route('Simpanan.index', ['id'=>$this->id]);
        } else if (auth()->user()->role == 'Pengurus'){
            return redirect()->route('Anggota.detail', ['id'=>$this->id]);
        }
    }

    public function render()
    {
        return view('livewire.simpanan.withdraw',['available_balance_pokok'=>$this->available_balance_pokok,'available_balance_wajib'=>$this->available_balance_wajib,'available_balance_sukarela'=>$this->available_balance_sukarela]);
    }
}
