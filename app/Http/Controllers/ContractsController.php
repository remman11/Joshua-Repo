<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Response;
use Illuminate\Support\Facades\DB;

use App\TermsandCondition;
use App\Contract;
use App\Agreements;
use App\Company;
use App\Quotations;
use App\Standard;

class ContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Company = DB::table('tblcontractlist')
                                ->join('tblcompany',function($join){
                                    $join->on('tblcontractlist.intCCompanyID', '=','tblcompany.intCompanyID');
                                })
                                ->join('tblgoods',function($join){
                                    $join->on('tblcompany.intCGoodsID', '=','tblgoods.intGoodsID');
                                })
                                ->where('tblcompany.boolDeleted', 0)
                                ->where('tblcontractlist.intCQuotationID', null)
                                ->where('tblcontractlist.intCTermsConditionID', null)
                                ->get();
        $Company2 = DB::table('tblcontractlist')
                                ->join('tblcompany',function($join){
                                    $join->on('tblcontractlist.intCCompanyID', '=','tblcompany.intCompanyID');
                                })
                                ->join('tblgoods',function($join){
                                    $join->on('tblcompany.intCGoodsID', '=','tblgoods.intGoodsID');
                                })
                                ->join('tblquotation',function($join){
                                    $join->on('tblquotation.intQuotationID', '=','tblcontractlist.intCQuotationID');
                                })
                                ->where('tblcontractlist.intCQuotationID', '!=' ,null)
                                // ->where('tblcontractlist.intCTermsConditionID', '!=' , null)
                                ->where('tblcompany.boolDeleted', 0)
                                ->get();
        return view('Contracts.index')
        ->with('Company',$Company)
        ->with('Company2',$Company2);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = TermsandCondition::where('boolDeleted',0)->get();
        $agreements = Agreements::where('boolDeleted',0)->get();
        $contracts = Contract::where('boolDeleted',0)->get();
        
        return view ('Contracts.create')
        ->with('contracts', $contracts)
        ->with('agreements', $agreements)
        ->with('terms', $terms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // $temp = $request->contractCompanyID;
        // $contract = Contract::find('intCCompanyID',$temp);
        // $contract = delete();
        $agreements = new Agreements;
        $agreements ->timestamps = false;
        $agreements ->strAgreementTitle = $request->contractAgreements;
        $agreements ->intAStandardID = $request->contractStandard;
        $agreements ->boolDeleted = 0;
        $agreements ->save();
        $AgreeID = DB::getPdo()->lastInsertID();
        error_log('trial1- '.$AgreeID);

        $quotation = new Quotations;
        $quotation ->timestamps = false;
        $quotation ->intQAgreementID = $AgreeID;
        $quotation ->fltQuotationRate = $request->contractQuotation;
        $quotation ->strQuotationDesc = $request->contractQuotationDesc;
        $quotation ->boolDeleted = 0;
        $quotation ->save();
        $QuotationID = DB::getPdo()->lastInsertID();
        error_log('trial2- '.$QuotationID);

        
        $contract = new Contract;
        $contract ->timestamps = false;
        $contract ->intCquotationID = $QuotationID;
        $contract ->intCTermsConditionID = $request->contractTermsCondition;
        $contract ->strContractListTitle = $request->contractTitle;
        $contract ->strContractListDesc = $request->contractDetails;
        $contract ->intCCompanyID = $request->contractCompanyID;
        $contract ->boolDeleted = 0;
        $contract ->save();

        return response()->json(['contracts'=>$contract]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($intCompanyID)
    {  
        $contract = Contract::findOrFail($intCompanyID);
        $Company = DB::table('tblcompany')
                                ->join('tblgoods',function($join){
                                    $join->on('tblcompany.intCGoodsID', '=','tblgoods.intGoodsID');
                                })
                                ->where('tblcompany.boolDeleted', 0)
                                ->where('tblcompany.intCompanyID', $intCompanyID)
                                ->get();
            // return view('ConsigneeReq.view')
            // ->with('Company', $Company);
            
        return view('Contracts.view')->with('Company', $Company)->with('contract', $contract);
        // return response()->json(['contracts' => $contract]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($intContractListID)
    {
        $contract = Contract::findOrFail($intContractListID);
        return response()->json(['contracts' => $contract]);
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
        $contract = Contract::findOrFail($request->contractID);
        $contract->timestamps = false;
        $contract->strContractListTitle = $request->title;
        $contract->strContractListDesc = $request->details;
        $contract->save();
        return response()->json(['contracts' => $contract]);
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
    public function delete($intContractListID)
    {
        
        $contract = Contract::findOrFail($intContractListID);
        $contract->timestamps = false;
        $contract->boolDeleted = 1;
        $contract->save();
        return response()->json(['contracts' => $contract]);
    }
    public function contractcreate($intCCompanyID)
    {
        $contract2 = Contract::where('intCCompanyID',$intCCompanyID);
        $terms = TermsandCondition::where('boolDeleted',0)->get();
        $agreements = Agreements::where('boolDeleted',0)->get();
        $contracts = Contract::where('boolDeleted',0)->where('intCCompanyID',$intCCompanyID)->get();
        $standard = Standard::where('boolDeleted', 0)->get();
        return view ('Contracts.create')
        ->with('contracts', $contracts)
        ->with('agreements', $agreements)
        ->with('contract2', $contract2)
        ->with('terms', $terms)
        ->with('standard', $standard);
    }
}
