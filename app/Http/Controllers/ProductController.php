<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('Dashboard.Products.index');
    }

    function insert(){
        return view('Dashboard.Products.ProductInsert');
    }
}
