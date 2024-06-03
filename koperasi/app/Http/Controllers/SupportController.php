<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){

        return view('support.index');
    }

    public function detail($id){
        return view('support.detail',compact('id'));
    }

    public function helpdesk(){
        return view('support.helpdesk');
    }
}
