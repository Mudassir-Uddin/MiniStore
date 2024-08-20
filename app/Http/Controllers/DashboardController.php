<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        return view('Dashboard.index');
    }

    function Profile(){
        return view('Dashboard.Users.Profile');
    }
}
