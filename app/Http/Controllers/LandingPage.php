<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPage extends Controller
{
    public function index()
    {
        $data['product_list'] = DB::select('SELECT * FROM product WHERE IS_US_PRODUCT = 0');
        $data['product_list_us'] = DB::select('SELECT * FROM product WHERE IS_US_PRODUCT = 1');
        return
            view('templates.header',) .
            view('landingPage',$data) .
            view('templates.footer');
    }

    public function download()
    {
        return
            view('downloadSalesKit');
    }
    public function downloadSaleSheet()
    {
        return
            view('downloadSaleSheet');
    }
    public function downloadBrochure()
    {
        return
            view('downloadBrochure');
    }
}
