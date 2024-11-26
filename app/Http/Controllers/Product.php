<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index()
    {
        return
            view('templates.header') .
            view('productPage') .
            view('templates.footer');
    }
}
