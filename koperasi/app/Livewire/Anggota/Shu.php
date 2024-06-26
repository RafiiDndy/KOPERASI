<?php

namespace App\Livewire\Anggota;


use Livewire\Component;
use App\Models\AnggotaActivity;
use App\Models\CatatanSimpanan;
use App\Models\ShuAnggota;
use Illuminate\Support\Facades\Auth;


class Shu extends Component
{
    public $userId;
    public $shu;
    public $totalSimpanan;

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->calculateShu();
    }

    private function calculateShu()
    {
        $this->totalSimpanan = CatatanSimpanan::where('user_id', $this->userId)->where('status', 'Verified')->sum('jumlah');
        $totalSimpananSeluruhAnggota = CatatanSimpanan::where('status', 'Verified')->sum('jumlah');
        $totalHarga = AnggotaActivity::sum('total_harga');
        
        if ($totalSimpananSeluruhAnggota > 0 && $this->totalSimpanan > 0) {
            $this->shu = (($this->totalSimpanan / $totalSimpananSeluruhAnggota) * $totalHarga) - ShuAnggota::where('user_id',$this->userId)->sum('withdrawn');
        } else {
            $this->shu = 0;
        }
    }
    public function getTotalSimpananProperty()
    {
        return $this->totalSimpanan;
    }
    public function render()
    {
        return view('livewire.anggota.shu');
    }
}
