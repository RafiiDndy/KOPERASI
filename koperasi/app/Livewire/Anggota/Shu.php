<?php

namespace App\Livewire\Anggota;


use Livewire\Component;
use App\Models\AnggotaActivity;
use App\Models\CatatanSimpanan;
use Illuminate\Support\Facades\Auth;


class Shu extends Component
{
    public $userId;
    public $shu;

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->calculateShu();
    }

    private function calculateShu()
    {
        $totalSimpanan = CatatanSimpanan::where('user_id', $this->userId)->where('status', 'Verified')->sum('jumlah');
        $totalSimpananSeluruhAnggota = CatatanSimpanan::where('status', 'Verified')->sum('jumlah');
        $totalHarga = AnggotaActivity::sum('total_harga');
        
        

        if ($totalSimpananSeluruhAnggota > 0 && $totalSimpanan > 0) {
            $this->shu = ($totalSimpanan / $totalSimpananSeluruhAnggota) * $totalHarga;
        } else {
            $this->shu = 0;
        }
    }

    public function render()
    {
        return view('livewire.anggota.shu');
    }
}
