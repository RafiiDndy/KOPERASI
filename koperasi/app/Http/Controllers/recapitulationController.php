<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\recapitulation;
use App\Models\CatatanSimpanan;

class RecapitulationController extends Controller
{
    function index()
    {
        return view('recapitulation.index');
    }
}
