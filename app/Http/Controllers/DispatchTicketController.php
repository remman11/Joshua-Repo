<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DispatchTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DispatchT = DB::table('tbldispatchticket as dt')
                                ->join('tbljobsched as js',function($join){
                                    $join->on('js.intJobSchedID', '=','dt.intDTJobSchedID'); 
                                })
                                //jobsched to dispatch ticket
                                ->join('tblschedule as s',function($join){
                                    $join->on('js.intJSSchedID', '=','s.intScheduleID'); 
                                })
                                //schedule jobsched
                                ->join('tbljoborder as jo',function($join){
                                    $join->on('js.intJSJobOrderID', '=','jo.intJobOrderID'); 
                                })
                                //joborder jobsched
                                ->join('tblhauling as h',function($join){
                                    $join->on('h.intHJobSchedID', '=','js.intJobSchedID'); 
                                })
                                //hauling jobsched
                                ->join('tbltugboatassign as ta',function($join){
                                    $join->on('js.intJSTugboatAssignID', '=','ta.intTAssignID'); 
                                })
                                //tugboatassign jobsched

                                //tugboatassign tugboat

                                //tugboat tugboatmain
                                ->join('tblservices as serve',function($join){
                                    $join->on('h.intHServicesID', '=','serve.intServicesID'); 
                                })
                                //hauling services

                                //hauling location

                                //barge
                                //berth
                                //vessel
                                ->join('tblcompany as c',function($join){
                                    $join->on('c.intCompanyID', '=','jo.intSCompanyID'); 
                                })
                                //company
                                ->join('tblgoods as gs',function($join){
                                    $join->on('c.intCGoodsID', '=','gs.intGoodsID'); 
                                })
                                //company goods
                                ->join('tblcontractlist as cl',function($join){
                                    $join->on('cl.intCCompanyID', '=','c.intCompanyID'); 
                                })
                                //company contractlist
                                ->join('tblstandard as standard',function($join){
                                    $join->on('cl.intCStandardID', '=','standard.intStandardID'); 
                                })
                                //contractlist standard
                                // whereDate('s.dttmETD', '=', date('Y-m-d'));
                                ->get();
        
        return view('DispatchTicket.index')->with('DispatchT',$DispatchT);
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
    public function show($intDispatchTicketID)
    {
        $DispatchT = DB::table('tbldispatchticket as dt')
                                ->join('tbljobsched as js',function($join){
                                    $join->on('js.intJobSchedID', '=','dt.intDTJobSchedID'); 
                                })
                                //jobsched to dispatch ticket
                                ->join('tblschedule as s',function($join){
                                    $join->on('js.intJSSchedID', '=','s.intScheduleID'); 
                                })
                                //schedule jobsched
                                ->join('tbljoborder as jo',function($join){
                                    $join->on('js.intJSJobOrderID', '=','jo.intJobOrderID'); 
                                })
                                //joborder jobsched
                                ->join('tblhauling as h',function($join){
                                    $join->on('h.intHJobSchedID', '=','js.intJobSchedID'); 
                                })
                                //hauling jobsched
                                ->join('tbltugboatassign as ta',function($join){
                                    $join->on('js.intJSTugboatAssignID', '=','ta.intTAssignID'); 
                                })
                                //tugboatassign jobsched
                                ->join('tbltugboat as tb',function($join){
                                    $join->on('ta.intTATugboatID', '=','tb.intTugboatID'); 
                                })
                                //tugboatassign tugboat
                                ->join('tblTugboatMain as tm',function($join){
                                    $join->on('tm.intTugboatMainID', '=','tb.intTTugboatMainID'); 
                                })
                                //tugboat tugboatmain
                                ->join('tblservices as serve',function($join){
                                    $join->on('h.intHServicesID', '=','serve.intServicesID'); 
                                })
                                //hauling services
                                ->join('tbllocation as loc',function($join){
                                    $join->on('h.intHLocationID', '=','loc.intLocationID'); 
                                })
                                //hauling location

                                //barge
                                //berth
                                ->join('tblvessel as v',function($join){
                                    $join->on('v.intVesselID', '=','jo.intSVesselID'); 
                                })
                                //vessel
                                ->join('tblcompany as c',function($join){
                                    $join->on('c.intCompanyID', '=','jo.intSCompanyID'); 
                                })
                                //company
                                ->join('tblgoods as gs',function($join){
                                    $join->on('c.intCGoodsID', '=','gs.intGoodsID'); 
                                })
                                //company goods
                                ->join('tblcontractlist as cl',function($join){
                                    $join->on('cl.intCCompanyID', '=','c.intCompanyID'); 
                                })
                                //company contractlist
                                ->join('tblstandard as standard',function($join){
                                    $join->on('cl.intCStandardID', '=','standard.intStandardID'); 
                                })
                                //contractlist standard
                                ->where('dt.intDispatchTicketID',$intDispatchTicketID)
                                ->get();
                                $Sched = DB::table('tbldispatchticket as dt')
                                ->select('dttmETA')
                                ->join('tbljobsched as js',function($join){
                                    $join->on('js.intJobSchedID', '=','dt.intDTJobSchedID'); 
                                })
                                //jobsched to dispatch ticket
                                ->join('tblschedule as s',function($join){
                                    $join->on('js.intJSSchedID', '=','s.intScheduleID'); 
                                })->where('dt.intDispatchTicketID',$intDispatchTicketID)
                                ->get();
                                
                                error_log($Sched);
        return view('DispatchTicket.show')
        ->with('Sched', $Sched)->with('DispatchT',$DispatchT);
        // return response()->json(['DispatchT'=> $DispatchT]);    
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
