<?php

namespace App\Livewire\Recapitulation;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Carbon\Carbon;

class ReportWajib extends Component
{
    use WithPagination;

    public $sortColumn = 'id';
    public $sortDirection = 'asc';
    public $search = '';
    public $monthStart = '';
    public $yearStart = '';
    public $monthEnd = '';
    public $yearEnd = '';
    public $dateStart = '';
    public $dateEnd = '';

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }

        $this->yearStart = Carbon::now()->year;
        $this->monthStart = Carbon::now()->month;
        $this->yearEnd = Carbon::now()->year;
        $this->monthEnd = Carbon::now()->month;
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function updatingsearch(): void
    {
        $this->gotoPage(1);
    }

    public function render()
    {
        $this->dateStart = Carbon::parse($this->yearStart."-".$this->monthStart)->startOfMonth()->format('Y-m-d');
        $this->dateEnd = Carbon::parse($this->yearEnd."-".$this->monthEnd)->endOfMonth()->format('Y-m-d');


        $reports = DB::table('users AS u')
        ->leftJoinSub(
            DB::table('catatan_simpanans AS cs')
                ->select('user_id', 
                   DB::raw('SUM(CASE WHEN cs.status = "Verified" AND cs.jenis_simpanan = "Wajib" AND cs.bulan BETWEEN ? AND ? THEN cs.jumlah ELSE 0 END) AS total_wajib')
                )
                ->whereRaw('cs.status = "Verified"')
                ->groupBy('user_id'),
            'cs','user_id', '=', 'u.id'
        )
        ->select(
            'u.*',
            DB::raw('COALESCE(cs.total_wajib, 0) AS total_wajib'),
            DB::raw('CASE
                WHEN COALESCE(cs.total_wajib, 0) >= 100000 THEN "Paid"
                ELSE "Unpaid"
            END AS status_wajib')
        )
        ->setBindings([$this->dateStart . " 00:00:00", $this->dateEnd . " 23:59:59"], 'where')
        ->where(function ($query) {
                $query->where('u.id', 'like', '%' . $this->search . '%')
                    ->orWhere('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');})
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->paginate(10);

        return view('livewire.recapitulation.report-wajib', compact('reports'));
    }
}
