<?php

namespace App\Livewire\Anggota;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\AnggotaActivity;

class Expense extends Component
{
    public $id;
    public $activity;
    public $total_harga;

    use LivewireAlert;

    protected $listeners = [
        'confirmedPengeluaran'
    ];

    public function mount()
    {
        if (auth()->user()->role !== 'Pengurus') {
            abort(403, 'Kamu bukan pengurus!');
        }
    }

    public function pengeluaran(){
        $this->validate([
            'activity' => 'required|string',
            'total_harga' => 'required|digits_between:1,16',
        ]);

        $this->alert('info', 'Confirm Pengeluaran?', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmedPengeluaran',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Confirm',
            'text' => 'Are you sure to add expenses with Rp.' . $this->total_harga,
            'cancelButtonText' => 'Cancel',
            'width' => '320',
        ]);
    }

    public function confirmedPengeluaran()
    {
        AnggotaActivity::create([
            'user_id' => $this->id,
            'activity' => $this->activity,
            'total_harga' => -$this->total_harga
        ]);

        $this->flash('success', 'Pengeluaran Rp.-' . $this->total_harga . ' Success!', [
            'position' => 'center',
            'timer' => '2000',
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        $this->reset(['activity', 'total_harga']);

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.anggota.expense');
    }
}
