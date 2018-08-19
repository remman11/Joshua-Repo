<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Company;
use App\Contract;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Contract = DB::table('tblcompany')
                                ->join('tblcontractlist','tblcompany.intCompanyID','=','tblcontractlist.intCCompanyID')
                                ->where('tblcompany.boolDeleted', 0)
                                ->get();
        $Company = DB::table('tblcompany')
                                ->leftJoin('tblcontractlist','tblcompany.intCompanyID','=','tblcontractlist.intCCompanyID')
                                ->where('tblcompany.boolDeleted', 0)
                                ->where('tblcontractlist.intCCompanyID', null)
                                ->get();
        return view('ConsigneeReq.index')
        ->with('Company', $Company)
        ->with('Contract', $Contract)
        ;
        
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
        
        $Requests = new Contract;
        $Requests->timestamps = false;
        $Requests->intCCompanyID = $request->Companyid;
        $Requests->boolDeleted = 0;
        $Requests->save();
        return response()->json(['Requests'=>$Requests]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($intCompanyID)
    {
        
        $Company = DB::table('tblcompany')
                                ->join('tblgoods',function($join){
                                    $join->on('tblcompany.intCGoodsID', '=','tblgoods.intGoodsID');
                                })
                                ->where('tblcompany.boolDeleted', 0)
                                ->where('tblcompany.intCompanyID', $intCompanyID)
                                ->get();
            return view('ConsigneeReq.view')
            ->with('Company', $Company)
            ;
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
    // public function accept(Request $request, $intCompanyID)
    // {
    //     $Company = Company::find($intCompanyID);
    //     $Contract = new Contract;
    //     $Contract->timestamps = false;
    //     $Contract->intCCompanyID = $intCompanyID;
    //     $Contract->boolDeleted = 0;
    //     error_log('id');
    //     $Contract->save();

    //     return redirect('/Requests');
    // }
}
