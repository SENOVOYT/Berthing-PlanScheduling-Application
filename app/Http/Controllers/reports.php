<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reports extends Controller
{
    //
    public function index(){
        return view('Dashboard.index');
    }
}
