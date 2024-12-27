<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    public function index($id)
    {
        $data['product_detail'] = DB::selectOne("SELECT * FROM product WHERE ID_PRODUCT = '".$id."'");
        return
            view('templates.header') .
            view('productPage',$data) .
            view('templates.footer');
    }
}
