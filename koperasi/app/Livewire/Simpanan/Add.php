<?php

namespace App\Livewire\Simpanan;
use App\Models\CatatanSimpanan;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use RalphJSmit\Livewire\Urls\Facades\Url;

class Add extends Component
{
    public $id;
    public $jumlah;
    public $jenis_simpanan;
    
    public $isWajibPaid;
    public $isPokokPaid;

    use LivewireAlert;
    protected $listeners = [
        'confirmed'
    ];

    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan '.auth()->user()->name);
        }
        $this->isWajibPaid = CatatanSimpanan::where('user_id', $this->id)
                                                ->where('jenis_simpanan', 'Wajib')
                                                ->where('status','Verified')
                                                ->whereMonth('created_at', now()->month)
                                                ->sum('jumlah') >= 100000;
        $this->isPokokPaid = CatatanSimpanan::where('user_id', $this->id)
                                        ->where('jenis_simpanan', 'Pokok')
                                        ->where('status','Verified')
                                        ->sum('jumlah') >= 1000000;
    }

    public function deposit(){
        $this->validate([
            'jumlah' => 'required|digits_between:1,16',
            'jenis_simpanan' => 'required|string',
        ]);
            
        $this->alert('info', 'Confirm Deposit?', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Confirm',
            'text' => 'Are you sure to deposit Rp.'.$this->jumlah,
            'cancelButtonText' => 'Cancel',
            'width' => '320',
            ]);
    }

    public function confirmed()
    {
        CatatanSimpanan::create([
            'jumlah' => $this->jumlah,
            'jenis_simpanan' => $this->jenis_simpanan,
            'user_id' => $this->id,
            'status' => 'menunggu verifikasi'
        ]);

        $this->flash('success','Deposit Rp.'.$this->jumlah.' Success!', [
            'position' => 'center',
            'timer' => '2000',
            'toast' => false,
            'timerProgressBar' => true,
            ]);

        $this->reset(['jumlah', 'jenis_simpanan']);
        
        return redirect(request()->header('Referer'));
    }

    public function render(){
        return view('livewire.simpanan.add',['isWajibPaid' => $this->isWajibPaid, 'isPokokPaid'=>$this->isPokokPaid]);
    }
}
