<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Response;
use Illuminate\Support\Facades\DB;

use App\Berth;
use App\Pier;


class BerthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $berths = DB::table('tblberth as berth')
        ->join('tblpier as pier','pier.intPierID','berth.intBPierID')
        ->select('berth.intBerthID as intBerthID',
        'berth.strBerthName as strBerthName',
        'pier.intPierID as intPierID',
        'pier.strPierName as strPierName',
        'berth.boolDeleted as boolDeleted')
        ->where('berth.boolDeleted',0)
        ->orderBy('pier.intPierID','DESC')
        ->get();
        $piers = Pier::where('boolDeleted',0)->get();
        return view('Berth.index')
        ->with('berths',$berths)
        ->with('piers', $piers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pier = Pier::where('boolDeleted',0)->get();
        $order = Berth::find(DB::table('tblberth')->max('intBerthID'));

        return view('Berth.create')->with('piers',$pier);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $berth = new Berth;
        
        $berth->timestamps = false;
        $berth->intBPierID = $request->pier;
        $berth->strBerthName= $request->berthName;
        $berth->boolDeleted = 0;
        $berth->save();

        return response()->json(['berths' => $berth]);
    }

    /**
     * 
     * 
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
    public function edit($intBerthID)
    {
        $berths = Berth::findOrFail($intBerthID);
        return response()->json(['berths' => $berths]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $berth = Berth::findOrFail($request->berthID);
        $berth->timestamps = false;
        $berth->strBerthName= $request->berthName;
        $berth->intBPierID = $request->pier;
        $berth->save();
        
        return response()->json(['berth' => $berth]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($intBerthID)
    {
 
        $berth = Berth::findOrFail($intBerthID);
        
    }

    public function delete($intBerthID)
    {

        $berth = Berth::findOrFail($intBerthID);
        $berth->timestamps = false;
        $berth->boolDeleted = 1;
        $berth->save();
        return response()->json(['berths' => $berth]);
    }
}
