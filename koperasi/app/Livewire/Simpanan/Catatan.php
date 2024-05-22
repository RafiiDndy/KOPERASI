<?php

namespace App\Livewire\Simpanan;
use App\Models\CatatanSimpanan;
use Livewire\Component;
use Livewire\WithPagination;

class Catatan extends Component
{
    public $id;

    public $sortColumn = 'created_at';
    public $sortDirection = 'desc';
    public $search = '';

    use WithPagination;

    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan '. auth()->user()->name);
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
        $simpanans = CatatanSimpanan::where('user_id', $this->id)
                            ->where(function ($query) {
                                $query->where('jumlah', 'like', '%' . $this->search . '%')
                                    ->orWhere('jenis_simpanan', 'like', '%' . $this->search . '%')
                                    ->orWhere('status', 'like', '%' . $this->search . '%')
                                    ->orWhere('created_at', 'like', '%' . $this->search . '%');})
                            ->orderBy($this->sortColumn, $this->sortDirection)
                            ->paginate(10);
    
        return view('livewire.simpanan.catatan',compact('simpanans'));
    }

}