<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedules;
use App\TugboatAssignment;
use App\Jobsched;
use DB;
class TugboatAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $Tugboat = DB::table('tbltugboat')
            ->join('tbltugboatmain',function($join){
                $join->on('tbltugboat.intTugboatID','=','tbltugboatmain.intTugboatMainID');
            })
            ->join('tbltugboatspecs',function($join){
                $join->on('tbltugboat.intTugboatID','=','tbltugboatspecs.intTugboatSpecsID');
            })
            ->where('tbltugboat.boolDeleted', 0)
            ->get();
        $TugboatAssign = TugboatAssignment::where('boolDeleted',0)->get();
        $Schedules = Schedules::where('boolDeleted',0)->get();
        return view('TugboatAssignment.index')
        ->with('TugboatAssign',$TugboatAssign)
        ->with('Tugboat',$Tugboat)
        ->with('Schedules',$Schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {

        $JobSched = new JobSched;
        $JobSched->timestamps = false;
        $JobSched->intJobSchedSID = $request->input('Schedule');
        $JobSched->intJobSchedAID = $request->input('TA');
        $JobSched->tmETD = $request->input('ETD');
        $JobSched->tmETA = $request->input('ETA');
        $JobSched->save();

        return redirect('/TugboatAssignment')->with('success', 'Sched Added');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
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
    public function update(Request $request, $intScheduleID)
    {
        
        
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
    public function createSched($intScheduleID)
    {
        $Schedules = Schedules::where('intScheduleID',$intScheduleID)->get();
        $TugboatAssign = TugboatAssignment::where('boolDeleted',0)->get();
        return view('TugboatAssignment.schedule')->with('Schedules',$Schedules)
        ->with('TugboatAssign',$TugboatAssign);
    }
    
}
