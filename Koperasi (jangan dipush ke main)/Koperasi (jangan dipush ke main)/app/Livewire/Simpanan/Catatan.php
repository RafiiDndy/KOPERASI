<?php

namespace App\Livewire\Simpanan;
use App\Models\CatatanSimpanan;
use Livewire\Component;

class Catatan extends Component
{
    public $id;
    public $simpanan;

    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan '. auth()->user()->name);
        }

        $this->simpanan = CatatanSimpanan::where('user_id', $this->id)->get();
    }

    public function render()
    {
        return view('livewire.simpanan.catatan',['simpanans' => $this->simpanan]);
    }
}