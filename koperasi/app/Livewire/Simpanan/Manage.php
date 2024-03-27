<?php

namespace App\Livewire\Simpanan;
use App\Models\CatatanSimpanan;
use App\Models\User;
use Livewire\Component;

class Manage extends Component
{
    public $simpananUsers;

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');

        }

        $this->simpananUsers = User::join('catatan_simpanans', 'users.id', '=', 'catatan_simpanans.user_id')
            ->where('users.status_anggota','Aktif')
            ->where('catatan_simpanans.status','menunggu verifikasi')
            ->select('users.id', 'users.name', 'catatan_simpanans.jumlah','catatan_simpanans.jenis_simpanan','catatan_simpanans.status','catatan_simpanans.created_at', 'catatan_simpanans.id as id_simpanan')->get();
    }

    public function verify_simpanan($id_simpanan, $id_user){
        $user = User::where('id', $id_user)->first();

        $simpanan = CatatanSimpanan::findOrFail($id_simpanan);
        $simpanan->status = 'Verified';
        $simpanan->save();
        
        session()->flash('success', 'Berhasil melakukan verifikasi Anggota:  '.$user->name.' dengan transaksi sebesar Rp.'.$simpanan->jumlah);
        
        return redirect()->to('/manage-simpanan');
    }

    public function reject_simpanan($id_simpanan,$id_user){
        $user = User::where('id', $id_user)->first();

        $simpanan = CatatanSimpanan::findOrFail($id_simpanan);
        $simpanan->status = 'Rejected';
        $simpanan->save();
        
        session()->flash('info', 'Berhasil melakukan reject Anggota:  '.$user->name.' dengan transaksi sebesar Rp.'.$simpanan->jumlah);
        
        return redirect()->to('/manage-simpanan');

    }

    public function render()
    {
        return view('livewire.simpanan.manage', ['users' => $this->simpananUsers]);
    }
}
