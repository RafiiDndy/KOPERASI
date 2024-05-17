<?php

namespace App\Livewire\Keuntungan;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\AnggotaActivity;

class KeuntunganKoperasi extends Component
{
    protected $updatesQueryString = ['year'];

    public $year;

    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan '.auth()->user()->name);
        }

        $this->year = Carbon::now()->year;
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $startDate = Carbon::parse($this->year . '-01-01')->startOfYear();
        $endDate = Carbon::parse($this->year . '-12-31')->endOfYear();

        $totalharga = AnggotaActivity::whereBetween('created_at', [
            $startDate,
            $endDate
        ])->sum('total_harga');

        return view('livewire.keuntungan.keuntungan-koperasi', compact('totalharga'));
    }
}