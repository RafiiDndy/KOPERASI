<?php

namespace App\Livewire\Recapitulation;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ReportPokok extends Component
{
    use WithPagination;

    public $sortColumn = 'id';
    public $sortDirection = 'asc';
    public $search = '';

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
        $reports = DB::table('users AS u')
        ->leftJoinSub(
            DB::table('catatan_simpanans AS cs')
                ->select('user_id', 
                    DB::raw('SUM(CASE WHEN cs.status = "Verified" AND cs.jenis_simpanan = "Pokok" THEN cs.jumlah ELSE 0 END) AS total_pokok'),
                )
                ->whereRaw('cs.status = "Verified"')
                ->groupBy('user_id'),
            'cs','user_id', '=', 'u.id'
        )
        ->select(
            'u.*',
            DB::raw('COALESCE(cs.total_pokok, 0) AS total_pokok'),
            DB::raw('CASE
                WHEN COALESCE(cs.total_pokok, 0) >= 1000000 THEN "Paid"
                ELSE "Unpaid"
            END AS status_pokok'),
        )
        ->where(function ($query) {
                $query->where('u.id', 'like', '%' . $this->search . '%')
                    ->orWhere('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');})
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->paginate(10);

        return view('livewire.recapitulation.report-pokok', compact('reports'));
    }
}
