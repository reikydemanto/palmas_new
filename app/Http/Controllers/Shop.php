<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shop extends Controller
{
    public function index(){
        return 
        view('templates.header').
        view('shopPage').
        view('templates.footer');
    }
}
