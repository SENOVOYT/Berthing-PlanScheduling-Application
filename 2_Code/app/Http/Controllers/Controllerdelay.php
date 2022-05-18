<?php
// written by: Driane PPerez
  // tested by: Driane Perez
  // debugged by: Driane Perez

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delay;

class Controllerdelay extends Controller
{//authentication system / middleware
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $delay = delay::where('finish','=','false')
        ->get();
        

       
        return view('delay.index',[
        'delay' => $delay
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('delay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $delays= delay::create([
            'type' => $request->input('type_name'),
            'Delay_start' => $request->input('Delay_start'),
            'Delay_end' => $request->input('Delay_end'),
            'finish' => 'false'

        ]);
        return redirect('/delay');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delay = delay::find($id)->first();
        $delay->delete();
        return redirect('/delay');
    }
}
