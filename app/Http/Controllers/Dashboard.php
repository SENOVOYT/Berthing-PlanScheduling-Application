<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $dash="Driane Perez";
        $des="THIS IS THE DES";
        $data=[
            'item' => $dash,
            'item1' => $des
        ];
        //return view('Dashboard.index', compact('dash','des') );
        // return view('Dashboard.index')->with('dash',$dash);
         return view('Dashboard.index')->with('data',$data);
        
    }
    public function show($id){
        $dash="Driane Perez";
        
        //return view('Dashboard.index', compact('dash','des') );
        // return view('Dashboard.index')->with('dash',$dash);
         return $id;
        
    }
}
