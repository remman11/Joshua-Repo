<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

use App\Agreements;
use App\Standard;
use App\Quotations;
use App\TermsandCondition;
use DB;

class AgreementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $joined = DB::table('tblagreement as agreement')
        ->join('tblquotation as quotation','agreement.intAQuotationID','quotation.intQuotationID')
        ->join('tblstandard as standard','agreement.intAStandardID','standard.intStandardID')
        ->select('agreement.intAgreementID',
        'agreement.strAgreementTitle','agreement.strAgreementDesc',
        'standard.strStandardDesc','standard.fltSDeliveryRate',
        'quotation.strQuotationDesc','quotation.fltFees','fltQuotationRate',
        'agreement.boolDeleted')
        ->where('agreement.boolDeleted',0)
        ->get();
        $agreement = Agreements::where('boolDeleted',0)->get();
        $terms = TermsandCondition::where('boolDeleted',0)->get();
        $quotations = Quotations::where('boolDeleted',0)->get();
        $standard = Standard::where('boolDeleted',0)->get();
        return view('Agreements.index')
        ->with('agreements',$agreement)
        ->with('terms',$terms)
        ->with('quotations',$quotations)
        ->with('quotations2',$quotations)
        ->with('standard',$standard)
        ->with('standard2',$standard)
        ->with('joined',$joined);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agreement = new Agreements;
        $agreement->timestamps = false;
        $agreement->strAgreementTitle = $request->agreementTitle;
        $agreement->strAgreementDesc = $request->agreementDetails;
        $agreement->intAStandardID = $request->agreementStandard;
        $agreement->intAQuotationID = $request->agreementQuotations;
        $agreement->boolDeleted = 0;
        $agreement->save();
        return response()->json(['agreements'=>$agreement]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($intAgreementID)
    {
        $joined = DB::table('tblagreement as agreement')
        ->join('tblquotation as quotation','agreement.intAQuotationID','quotation.intQuotationID')
        ->join('tblstandard as standard','agreement.intAStandardID','standard.intStandardID')
        ->select('agreement.intAgreementID',
        'agreement.strAgreementTitle','agreement.strAgreementDesc',
        'standard.strStandardDesc','standard.fltSDeliveryRate',
        'quotation.strQuotationDesc','quotation.fltFees','fltQuotationRate',
        'agreement.boolDeleted')
        ->where('agreement.boolDeleted',0)
        ->where('agreement.intAgreementID',$intAgreementID)
        ->get();
        return response()->json(['agreements'=>$joined]);
        // dd($joined);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($intAgreementID)
    {
        $agreement = Agreements::findOrFail($intAgreementID);
        return response()->json(['agreements'=>$agreement]);
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
        $agreement = Agreements::findOrFail($request->agreementsID);
        $agreement->timestamps = false;
        $agreement->intAQuotationID = $request->agreementsQuotation;
        $agreement->intAStandardID = $request->agreementsStandard;
        $agreement->strAgreementTitle = $request->agreementsTitle;
        $agreement->strAgreementDesc = $request->agreementsDetails;
        $agreement->save();
        return response()->json(['agreement'=>$agreement]);
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
