<?php

namespace App\Livewire\Anggota;
use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $users;

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }

        $this->users = User::where('id','!=',auth()->id())->orderBy('status_anggota','asc')->get();
    }

    public function render()
    {
        return view('livewire.anggota.show',['users' => $this->users]);
    }
}
