<?php

namespace App\Livewire\Support;
use App\Models\Support;
use Livewire\Component;

class Detail extends Component
{
    public $users;
    public $id;

    public function mount()
    {
        $this->users = Support::where('support_id', $this->id)->get();
    }

    public function render()
    {
        return view('livewire.support.detail', ['Support' => $this->users]);
    }
}
