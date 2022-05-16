<?php
// written by: Driane PPerez
  // tested by: Driane Perez
  // debugged by: Driane Perez

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vessel;

class VesselController extends Controller
{
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
        $vessel = Vessel::where('finish','=','false')
        ->get();
        

       
        return view('Vessel.index',[
        'Vessel' => $vessel
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

        return view('Vessel.create');
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
        $ves= Vessel::create([
            'Vessel' => $request->input(),
            'voyage_number' => $request->input(),
            'ETA' => $request->input(),
            'ETD' => $request->input(),
            'ATA' => $request->input(),
            'ATD' => $request->input(),
            'pilot_name' => $request->input(),
            'operation_supervisor' => $request->input(),
            'gang_foreman' => $request->input(),
            'stevedore_gang' => $request->input(),
            'crane_operator' => $request->input(),
            'Head_operator' => $request->input(),
            'histacker_operator' => $request->input(),
            'Machines_needed' => $request->input(),
            'finish' => $request->input(),

        ]);
        
        

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
    }
}
