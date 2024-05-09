<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    public function index(){
        if (auth()->user()->status_anggota == "Aktif" || auth()->user()->status_anggota == "Tidak Aktif" || auth()->user()->role == "Pengurus") {
            return view('simpanan.index');
        } else {
            return view('simpanan.indexNotVerified');
        }

    }

    public function manage(){

        return view('simpanan.manage');
    }
}
