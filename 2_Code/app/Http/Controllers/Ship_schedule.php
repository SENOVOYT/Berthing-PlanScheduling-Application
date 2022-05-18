<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delay;

class Ship_schedule extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
        return view('Ship_schedule.index');
    }
}
