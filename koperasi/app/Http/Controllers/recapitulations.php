<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\recapitulation;

class recapitulations extends Controller
{
    function index()
    {
    	$data = recapitulation::join('jobs', 'jobs.id', '=', 'users.id')
                    ->join('job_batches', 'jobs.id', '=', 'job_batches.id')
              		->get(['users.id','users.name', 'users.email', 'jobs.id', 'job_batches.job_name', 'job_batches.total_jobs']);

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

        return view('recapitulation', compact('data'));
    }
}
