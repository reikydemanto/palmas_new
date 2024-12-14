<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurActivities extends Controller
{
    public function index()
    {
        $data['articles'] = DB::select('select * from articles');

        return
            view('templates.header') .
            view('ourActivitiesPage',$data) .
            view('templates.footer');
    }
}
