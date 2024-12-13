<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index()
    {
        return
            view('templates.header',) .
            view('landingPage',) .
            view('templates.footer');
    }

    public function download()
    {
        return
            view('downloadSalesKit');
    }
}
