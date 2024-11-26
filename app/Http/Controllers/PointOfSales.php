<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointOfSales extends Controller
{
    public function index(){
        return 
        view('templates.header').
        view('pointOfSalesPage').
        view('templates.footer');
    }
}
