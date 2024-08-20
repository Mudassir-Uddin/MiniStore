<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        return view('Dashboard.Categories.index');
    }
    function insert(){
        return view('Dashboard.Categories.CategoryInsert');
    }
}
