<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('Dashboard.Users.index');
    }
    function insert(){
        return view('Dashboard.Users.UserInsert');
    }
}
