<?php

namespace App\Livewire\Recapitulation;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\CatatanSimpanan;
use Illuminate\Support\Facades\DB;

class Show extends Component
{
    public $sortColumn = 'created_at';
    public $sortDirection = 'desc';
    public $search = '';
    public $dateStart = '';
    public $dateEnd = '';

    use WithPagination;

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }

        $this->dateStart = Carbon::now()->subDays(30)->format('Y-m-d');
        $this->dateEnd = Carbon::now()->format('Y-m-d');
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $recapitulation = User::join('catatan_simpanans', 'users.id', '=', 'catatan_simpanans.user_id')
                                    ->select('users.id', 'users.name', 'users.email', 'users.role', 'catatan_simpanans.jumlah','catatan_simpanans.jenis_simpanan','catatan_simpanans.status','catatan_simpanans.created_at', 'catatan_simpanans.id as id_simpanan')
                                    ->where('status','Verified')
                                    ->where(function ($query) {
                                    $query->where('users.id', 'like', '%' . $this->search . '%')
                                        ->orWhere('name', 'like', '%' . $this->search . '%')
                                        ->orWhere('email', 'like', '%' . $this->search . '%')
                                        ->orWhere('role', 'like', '%' . $this->search . '%')
                                        ->orWhere('jumlah', 'like', '%' . $this->search . '%')
                                        ->orWhere('jenis_simpanan', 'like', '%' . $this->search . '%')
                                        ->orWhere('status', 'like', '%' . $this->search . '%')
                                        ->orWhere('catatan_simpanans.created_at', 'like', '%' . $this->search . '%');})
                                    ->whereBetween('catatan_simpanans.created_at', [$this->dateStart . ' 00:00:00', $this->dateEnd . ' 23:59:59'])
                                    ->orderBy($this->sortColumn, $this->sortDirection)
                                    ->paginate(20);
                                    
        $totalPokok = CatatanSimpanan::where('status','Verified')
                            ->where('jenis_simpanan', 'Pokok')
                            ->whereBetween('catatan_simpanans.created_at', [$this->dateStart . ' 00:00:00', $this->dateEnd . ' 23:59:59'])
                            ->sum('jumlah');
        $totalWajib = CatatanSimpanan::where('status','Verified')
                            ->where('jenis_simpanan', 'Wajib')
                            ->whereBetween('catatan_simpanans.created_at', [$this->dateStart . ' 00:00:00', $this->dateEnd . ' 23:59:59'])
                            ->sum('jumlah');
        $totalSukarela = CatatanSimpanan::where('status','Verified')
                            ->where('jenis_simpanan', 'Sukarela')
                            ->whereBetween('catatan_simpanans.created_at', [$this->dateStart . ' 00:00:00', $this->dateEnd . ' 23:59:59'])
                            ->sum('jumlah');
        $dateStarts = date('d-m-Y', strtotime($this->dateStart));
        $dateEnds  = date('d-m-Y', strtotime($this->dateEnd));

        return view('livewire.recapitulation.show', compact(['recapitulation','totalPokok','totalWajib','totalSukarela', 'dateStarts', 'dateEnds']));
    }
}
