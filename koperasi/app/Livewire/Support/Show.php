<?php

namespace App\Livewire\Support;
use App\Models\Support;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    public $sortDirection = 'asc';
    public $search = '';

    use WithPagination;
    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $users = Support::where('support_id','!=',auth()->id())->
                    where(function ($query) {
                        $query->where('nama_support', 'like', '%' . $this->search . '%')
                            ->orWhere('detail', 'like', '%' . $this->search . '%');})
                    ->paginate(10);

        return view('livewire.Support.show',compact('users'));
    }
}
