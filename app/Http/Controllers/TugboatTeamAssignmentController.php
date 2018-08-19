<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

use App\Employees;
use App\TeamAssignment;
use App\Tugboat;
use App\TugboatAssignment;

use DB;

class TugboatTeamAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $emp = Employees::all();
        $tugboatassign = DB::table('tbltugboatassign as assignment')
        ->join('tblteam as team','assignment.intTATeamID','team.intTeamID')
        ->join('tbltugboat as tugboat','assignment.intTATugboatID','tugboat.intTugboatID')
        ->join('tblemployee as employee','team.intTeamID','employee.intETeamID')
        ->join('tblposition as position','employee.intEPositionID','position.intPositionID')
        ->join('tbltugboatmain as main','tugboat.intTTugboatMainID','main.intTugboatMainID')
        ->where('assignment.boolDeleted',0)
        ->where('position.strPositionName','Captain')
        ->get();
        $employees = DB::table('tblemployee as employee')
        ->join('tblposition as position','employee.intEPositionID','position.intPositionID')
        ->where('employee.boolDeleted',0)
        ->get();
        $captain = DB::table('tblemployee as employee')
        ->join('tblposition as position','employee.intEPositionID','position.intPositionID')
        ->where('position.strPositionName','Captain')
        ->where('employee.boolDeleted',0)
        ->get();
        $ceng = DB::table('tblemployee as employee')
        ->join('tblposition as position','employee.intEPositionID','position.intPositionID')
        ->where('position.strPositionName','Chief Engineer')
        ->where('employee.boolDeleted',0)
        ->get();
        $fmate = DB::table('tblemployee as employee')
        ->join('tblposition as position','employee.intEPositionID','position.intPositionID')
        ->where('position.strPositionName','First Mate')
        ->where('employee.boolDeleted',0)
        ->get();
        $crew = DB::table('tblemployee as employee')
        ->join('tblposition as position','employee.intEPositionID','position.intPositionID')
        ->where('position.strPositionName','Crew')
        ->where('employee.boolDeleted',0)
        ->get();
        $others = DB::table('tblemployee as employee')
        ->join('tblposition as position','employee.intEPositionID','position.intPositionID')
        ->where('position.strPositionName','!=','Captain')
        ->where('position.strPositionName','!=','Chief Engineer')
        ->where('position.strPositionName','!=','Crew')
        // ->where('position.strPositionName','!=','First Mate')
        ->get();
        return view('TeamAssignment.index')
        ->with('tugboatassign',$tugboatassign)
        ->with('employee',$employees)
        ->with('captains',$captain)
        ->with('chiefengineers',$ceng)
        ->with('crew',$crew)
        ->with('others',$others);
        return response()->json(['tugboatassign'=>$others]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
