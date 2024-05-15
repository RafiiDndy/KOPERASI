<?php

namespace App\Livewire\Anggota;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AnggotaActivity;

class ListActivity extends Component
{
    public $id;

    public $sortColumn = 'created_at';
    public $sortDirection = 'desc';
    public $search = '';

    use WithPagination;

    public function mount()
    {
        if (!auth()->user() && auth()->user()->role != 'Pengurus') {
            abort(403, 'Kamu bukan ' . auth()->user()->name);
        }
    }

    public function updatingsearch(): void
    {
        $this->gotoPage(1);
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $activities = AnggotaActivity::join('users', 'anggota_activities.user_id', '=', 'users.id')->select('users.name', 'anggota_activities.*')
            ->where('user_id', $this->id)
            ->where(function ($query) {
                $query->where('activity', 'like', '%' . $this->search . '%')
                    ->orWhere('total_harga', 'like', '%' . $this->search . '%')
                    ->orWhere('name', 'like', '%' . $this->search . '%')
                    ->orWhere('anggota_activities.created_at', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(10);

        return view('livewire.anggota.list-activity', compact('activities'));
    }
}
