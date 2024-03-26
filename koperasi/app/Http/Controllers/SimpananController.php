<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    public function index(){

        return view('simpanan.index');
    }

    public function manage(){

        return view('simpanan.manage');
    }
}
