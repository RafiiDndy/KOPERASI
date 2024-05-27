<?php
namespace App\Http\Controllers;

use App\Models\AnggotaActivity;
use App\Models\CatatanSimpanan;
use App\Models\ShuAnggota;
use Illuminate\Support\Facades\Auth;

class SHUController extends Controller
{
    public function index()
    {
        $totalSimpanan = CatatanSimpanan::where('user_id', Auth::user()->id)
            ->where('status', 'Verified')
            ->sum('jumlah');

        $totalSimpananSeluruhAnggota = CatatanSimpanan::where('status', 'Verified')
            ->sum('jumlah');

        $totalHarga = AnggotaActivity::sum('total_harga');
        
        if ($totalSimpananSeluruhAnggota > 0 && $totalSimpanan > 0) {
            $shu = (($totalSimpanan / $totalSimpananSeluruhAnggota) * $totalHarga) - ShuAnggota::where('user_id',Auth::user()->id)->sum('withdrawn');
        } else {
            $shu = 0;
        }
        return view('dashboard', ['shu' => $shu]);
    }
}