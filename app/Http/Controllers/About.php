<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function index()
    {
        return
            view('templates.header') .
            view('aboutPage') .
            view('templates.footer');
    }
}
