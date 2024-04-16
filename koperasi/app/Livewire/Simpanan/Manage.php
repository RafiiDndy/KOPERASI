<?php

namespace App\Livewire\Simpanan;
use App\Models\CatatanSimpanan;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Manage extends Component
{
    public $simpananUsers;

    public $sortColumn = 'created_at';
    public $sortDirection = 'desc';
    public $search = '';

    use WithPagination;
    use LivewireAlert;

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');

        }

        $this->simpananUsers = User::join('catatan_simpanans', 'users.id', '=', 'catatan_simpanans.user_id')
            ->where('catatan_simpanans.status','menunggu verifikasi')
            ->select('users.id', 'users.name', 'catatan_simpanans.jumlah','catatan_simpanans.jenis_simpanan','catatan_simpanans.status','catatan_simpanans.created_at', 'catatan_simpanans.id as id_simpanan')->get();
    }

    public function verify_simpanan($id_simpanan, $id_user){
        $user = User::where('id', $id_user)->first();

        $simpanan = CatatanSimpanan::findOrFail($id_simpanan);
        $simpanan->status = 'Verified';
        $simpanan->save();
        
        $this->flash('success','Berhasil melakukan verifikasi transaksi Anggota:  '.$user->name.' dengan transaksi sebesar Rp.'.$simpanan->jumlah, [
            'position' => 'top-end',
            'timer' => '2000',
            'toast' => true,
            'timerProgressBar' => true,
            ]);

        return redirect()->to('/manage-simpanan');
    }

    public function reject_simpanan($id_simpanan,$id_user){
        $user = User::where('id', $id_user)->first();

        $simpanan = CatatanSimpanan::findOrFail($id_simpanan);
        $simpanan->status = 'Rejected';
        $simpanan->save();
        
        $this->flash('info','Berhasil melakukan reject transaksi Anggota:  '.$user->name.' dengan transaksi sebesar Rp.'.$simpanan->jumlah, [
            'position' => 'top-end',
            'timer' => '2000',
            'toast' => true,
            'timerProgressBar' => true,
            ]);

        return redirect()->to('/manage-simpanan');

    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $catatanSimpananUsers =  User::join('catatan_simpanans', 'users.id', '=', 'catatan_simpanans.user_id')
                                    ->where('catatan_simpanans.status','menunggu verifikasi')
                                    ->select('users.id', 'users.name', 'catatan_simpanans.jumlah','catatan_simpanans.jenis_simpanan','catatan_simpanans.status','catatan_simpanans.created_at', 'catatan_simpanans.id as id_simpanan', 'catatan_simpanans.bukti_transfer')
                                    ->where(function ($query) {
                                        $query->where('users.id', 'like', '%' . $this->search . '%')
                                            ->orWhere('name', 'like', '%' . $this->search . '%')
                                            ->orWhere('jumlah', 'like', '%' . $this->search . '%')
                                            ->orWhere('jenis_simpanan', 'like', '%' . $this->search . '%')
                                            ->orWhere('catatan_simpanans.created_at', 'like', '%' . $this->search . '%')
                                            ->orWhere('status', 'like', '%' . $this->search . '%');})
                                    ->orderBy($this->sortColumn, $this->sortDirection)
                                    ->paginate(20);

        return view('livewire.simpanan.manage', compact('catatanSimpananUsers'));
    }
}
