<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index()
    {
        return
            view('templates.header',) .
            view('contactPage',) .
            view('templates.footer');
    }   
}
