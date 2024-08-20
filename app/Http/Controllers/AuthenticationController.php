<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    function Login(){
        return view('Dashboard.Form.Login');
    }
    
    function Register(){
        return view('Dashboard.Form.Register');
    }
}
