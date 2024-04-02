<?php

namespace App\Livewire\Anggota;
use App\Models\User;
use Livewire\Component;

class Verifikasi extends Component
{
    public $users;

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }

        $this->users = User::where('status_anggota', 'not_verified')->where('id','!=',auth()->id())->get();
    }

    public function verify_anggota($id)
    {
        $user = User::findOrFail($id);
        $user->status_anggota = 'Aktif';
        $user->save();
        
        session()->flash('success', 'Anggota '.$user->name.' berhasil di verifikasi!');
        
        return redirect()->to('/verifikasi-anggota');
    }

    public function reject_anggota($id)
    {
        $user = User::findOrFail($id);
        $user->status_anggota = 'Rejected';
        $user->save();
        
        session()->flash('info', 'Anggota '.$user->name.' berhasil di reject!');

        return redirect()->to('/verifikasi-anggota');
    }

    public function render()
    {
        return view('livewire.anggota.verifikasi', ['users' => $this->users]);
    }
}
