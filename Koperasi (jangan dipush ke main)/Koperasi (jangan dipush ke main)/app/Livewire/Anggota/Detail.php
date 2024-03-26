<?php

namespace App\Livewire\Anggota;
use App\Models\User;
use Livewire\Component;

class Detail extends Component
{
    public $users;
    public $id;

    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan '.auth()->user()->name);
        }

        $this->users = User::where('id', $this->id)->get();
    }

    public function remove_anggota($id){
        $user = User::findOrFail($id);
        $user->status_anggota = 'Tidak Aktif';
        $user->save();
        
        session()->flash('info', 'Anggota '.$user->name.' berhasil di non-aktifkan!');

        return redirect()->route('Anggota.detail',['id' => $this->id]);
    }

    public function render()
    {
        return view('livewire.anggota.detail', ['users' => $this->users]);
    }
}
