<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(){

        return view('anggota.index');
    }

    public function verifikasi(){
        return view('anggota.verifikasi');
    }
  
    public function detail($id){
        return view('anggota.detail',compact('id'));
    }
}
