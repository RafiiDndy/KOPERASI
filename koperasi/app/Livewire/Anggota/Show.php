<?php

namespace App\Livewire\Anggota;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    public $sortColumn = 'status_anggota';
    public $sortDirection = 'asc';
    public $search = '';

    use WithPagination;

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $users = User::where('id','!=',auth()->id())->
                    where(function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('email', 'like', '%' . $this->search . '%')
                            ->orWhere('nik', 'like', '%' . $this->search . '%')
                            ->orWhere('no_hp', 'like', '%' . $this->search . '%')
                            ->orWhere('umur', 'like', '%' . $this->search . '%')
                            ->orWhere('status_anggota', 'like', '%' . $this->search . '%');})
                    ->orderBy($this->sortColumn, $this->sortDirection)
                    ->paginate(10);

        return view('livewire.anggota.show',compact('users'));
    }
}
