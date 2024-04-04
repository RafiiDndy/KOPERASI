<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\recapitulation;
use App\Models\CatatanSimpanan;

class recapitulationController extends Controller
{
    function index()
    {
    	$data = recapitulation::all();
        $data1 = CatatanSimpanan::where('jenis_simpanan','pokok')->get();
        $data2 = CatatanSimpanan::where('jenis_simpanan','wajib')->get();
        $data3 = CatatanSimpanan::where('jenis_simpanan','sukarela')->get();

       	/*Above code will produce following query
        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`
        */

        return view('recapitulation', compact('data', 'data1', 'data2', 'data3'));
    }
}
