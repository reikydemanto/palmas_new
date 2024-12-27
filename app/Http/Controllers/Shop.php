<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Shop extends Controller
{
    public function index(){

        $data['product'] = DB::select('SELECT * FROM product WHERE IS_US_PRODUCT = 0');
        $data['product_us'] = DB::select('SELECT * FROM product WHERE IS_US_PRODUCT = 1');

        return 
        view('templates.header').
        view('shopPage',$data).
        view('templates.footer');
    }
}
