<?php

namespace App\Livewire\Anggota;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Verifikasi extends Component
{
    public $sortColumn = 'name';
    public $sortDirection = 'asc';
    public $search = '';

    use WithPagination;
    use LivewireAlert;

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }

    }

    public function verify_anggota($id)
    {
        $user = User::findOrFail($id);
        $user->status_anggota = 'Aktif';
        $user->save();
        
        $this->flash('success','Anggota '.$user->name.' berhasil di verifikasi!', [
            'position' => 'top-end',
            'timer' => '2000',
            'toast' => true,
            'timerProgressBar' => true,
            ]);

        return redirect(request()->header('Referer'));
    }

    public function reject_anggota($id)
    {
        $user = User::findOrFail($id);
        $user->status_anggota = 'Rejected';
        $user->save();
        
        $this->flash('info','Anggota '.$user->name.' berhasil di reject!', [
            'position' => 'top-end',
            'timer' => '2000',
            'toast' => true,
            'timerProgressBar' => true,
            ]);

        return redirect(request()->header('Referer'));
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $users = User::where('id','!=',auth()->id())->where('status_anggota', 'not_verified')
                        ->where(function ($query) {
                            $query->where('name', 'like', '%' . $this->search . '%')
                                ->orWhere('email', 'like', '%' . $this->search . '%')
                                ->orWhere('nik', 'like', '%' . $this->search . '%')
                                ->orWhere('status_anggota', 'like', '%' . $this->search . '%');})
                        ->orderBy($this->sortColumn, $this->sortDirection)
                        ->paginate(10);
        return view('livewire.anggota.verifikasi', compact('users'));
    }
}
