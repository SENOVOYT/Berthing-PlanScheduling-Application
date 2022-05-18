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
        $nme='';
        foreach ($request->towhead as $key =>$name) {
            $nme=$nme.$request->towhead[$key].' ';
            # code...

        }
        $n='';
        foreach ($request->machine as $key =>$name) {
            $n=$n.$request->machine[$key].' ';
            # code...

        }
        $ves= Vessel::create([
            'Vessel' => $request->input('vessel-name'),
            'voyage_number' => $request->input('voyage-no'),
            'ETA' => $request->input('eta-date'),
            'ETD' => $request->input('etd-date'),
            'ATA' => $request->input('ata-date'),
            'ATD' => $request->input('atd-date'),
            'pilot_name' => $request->input('pilot-name'),
            'operation_supervisor' => $request->input('operations-supervisor'),
            'gang_foreman' => $request->input('gang-forman'),
            'stevedore_gang' => $request->input('gang-number'),
            'crane_operator' => $request->input('crane-operator'),
            'Head_operator' => $nme,
            'histacker_operator' => $request->input('histackeroperator'),
            'Machines_needed' => $n,
            'finish' => $request->input('finish')

        ]);
        return redirect('/vessels');
        
        

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
        $vessel = Vessel::find($id)->first();
        
        return view('Vessel.edit')->with('v',$vessel);
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
        $d=date('Y-m-d H:i:s');
        $ves= Vessel::where('id',$id)->update([
          
            'ATA' => $request->input('ata-date'),
            'ATD' => $request->input('atd-date')
           

        ]);
        return redirect('/vessels');
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
