<?php

namespace App\Livewire\Simpanan;
use App\Models\CatatanSimpanan;
use Livewire\Component;

class Add extends Component
{
    public $id;
    public $jumlah;
    public $jenis_simpanan;
    
    public $isWajibDeposit;
    public $isPokok;

    public function mount()
    {
        if (!(auth()->user())) {
            abort(403, 'Kamu bukan '.auth()->user()->name);
        }
        $this->isWajibDeposit = CatatanSimpanan::where('user_id', $this->id)
                                                ->where('jenis_simpanan', 'Wajib')
                                                ->where('status','Verified')
                                                ->whereMonth('created_at', now()->month)->exists();
        $this->isPokok = CatatanSimpanan::where('user_id', $this->id)
                                        ->where('jenis_simpanan', 'Pokok')
                                        ->where('status','Verified')->exists();
    }

    public function deposit(){
        $this->validate([
            'jumlah' => 'required|digits_between:1,16',
            'jenis_simpanan' => 'required|string',
        ]);

        CatatanSimpanan::create([
            'jumlah' => $this->jumlah,
            'jenis_simpanan' => $this->jenis_simpanan,
            'user_id' => $this->id,
            'status' => 'menunggu verifikasi'
        ]);

        session()->flash('success', 'Berhasil melakukan deposit!');
        $this->reset(['jumlah', 'jenis_simpanan']);

        if (auth()->user()->id == $this->id){
            return redirect()->route('Simpanan.index', ['id'=>$this->id]);
        } else if (auth()->user()->role == 'Pengurus'){
            return redirect()->route('Anggota.detail', ['id'=>$this->id]);
        }
    }

    public function render(){
        return view('livewire.simpanan.add',['isWajibDeposit' => $this->isWajibDeposit, 'isPokok'=>$this->isPokok]);
    }
}
