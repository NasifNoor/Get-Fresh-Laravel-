<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $req){

    	$req->session()->flush();
    	return view('Home.index');
    }
}
