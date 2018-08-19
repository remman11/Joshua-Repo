<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
        
use App\Berth;
use App\Tugboat;
use App\TugboatClass;
use App\TugboatMainSpecifications;
use App\TugboatSpecifications;

use DB;
class TugboatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tugboat = TugboatMainSpecifications::where('boolDeleted',0)->get();
        $maxMain = TugboatMainSpecifications::max('intTugboatMainID');
        $maxSpecs = TugboatSpecifications::max('intTugboatSpecsID');
        $maxClass = TugboatClass::max('intTugboatClassID');
        $maxTug = Tugboat::max('intTugboatID');
        
        return view('Tugboat.index')
        ->with('tugboats',$tugboat)
        ->with('maxClassID', $maxClass)
        ->with('maxSpecsID', $maxSpecs)
        ->with('maxMainID', $maxMain)
        ->with('maxTugboatID', $maxTug);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tugboat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new TugboatClass;
        $main = new TugboatMainSpecifications;
        $tugboat = new Tugboat;
        $specs = new TugboatSpecifications;
        //assignment of ID's
        $tugboat->intTugboatID = $request->tugboatID;
        $tugboat->intTTugboatClassID = $request->classID;
        $tugboat->intTTugboatMainID = $request->mainID;
        $tugboat->intTTugboatSpecsID = $request->specsID;
        $class->intTugboatClassID = $request->classID;
        $main->intTugboatMainID = $request->mainID;
        $specs->intTugboatSpecsID = $request->specsID;
        //not Deleted;
        $class->boolDeleted = 0;
        $main->boolDeleted = 0;
        $tugboat->boolDeleted = 0;
        $specs->boolDeleted = 0;
        //no Timestamps
        $main->timestamps = false;
        $class->timestamps = false;
        $tugboat->timestamps = false;
        $specs->timestamps = false;
        //Class
        $class->strOwner = 'Hi-Energy Marine Services Inc.';
        $class->strTugboatFlag = $request->tugboatFlag;
        $class->strTugboatType = $request->tugboatType;
        $class->strClassNum = $request->classNum;
        $class->strOfficialNum = $request->officialNum;
        $class->strIMONum = $request->imoNum;
        $class->strTradingArea = $request->tradingArea;
        $class->strHomePort = $request->homePort;
        $class->enumISPSCodeCompliance = $request->ispsComp;
        //main Information
        $main->strName = $request->tugboatName;
        $main->strLength = $request->length;
        $main->strBreadth = $request->breadth;
        $main->strDepth = $request->depth;
        $main->strHorsePower = $request->horsePower;
        $main->strMaxSpeed = $request->maxSpeed;
        $main->strBollardPull = $request->bollardPull;
        $main->strGrossTonnage = $request->grossTonnage;
        $main->strNetTonnage = $request->netTonnage;
        $main->datLastDrydocked = $request->lastDryDocked;
        //Specifications
        $specs->strHullMaterial = $request->hullMaterial;
        $specs->strBuilder = $request->builder;
        $specs->strMakerPower = $request->makerPower;
        $specs->strDrive = $request->drive;
        $specs->strCylinderperCycle = $request->cylinderpercycle;
        $specs->strAuxEngine = $request->auxEngine;
        $specs->strBuiltIn = $request->builtIn;
        
        $class->save();
        $specs->save();
        $main->save();
        $tugboat->save();
        return response()->json(['class' => $class,'main' => $main, 'specs' => $specs, 'tugboat' => $tugboat]);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePictures(Request $request)
    {

    }
    public function updateMain(Request $request)
    {
        $tugboat = TugboatMainSpecifications::findOrFail($request->mainID);
        $tugboat->timestamps = false;
        $tugboat->strName = $request->tugboatName;
        $tugboat->strDepth = $request->depth;
        $tugboat->strLength = $request->length;
        $tugboat->strBreadth = $request->breadth;
        $tugboat->strHorsePower = $request->horsePower;
        $tugboat->strMaxSpeed = $request->maxSpeed;
        $tugboat->strBollardPull = $request->bollardPull;
        $tugboat->strGrossTonnage = $request->grossTonnage;
        $tugboat->strNetTonnage = $request->netTonnage;
        $tugboat->datLastDrydocked = $request->lastDryDocked;
        $tugboat->save();
        return response()->json(['tugboat' => $tugboat]);

    }
    public function updateSpecs(Request $request)
    {
        $specs = TugboatSpecifications::findOrFail($request->specsID);
        $specs->timestamps = false;
        $specs->strHullMaterial = $request->hullMaterial;
        $specs->strBuilder = $request->builder;
        $specs->strMakerPower = $request->makerPower;
        $specs->strDrive = $request->drive;
        $specs->strCylinderperCycle = $request->cylinderpercycle;
        $specs->strAuxEngine = $request->auxEngine;
        $specs->strBuiltIn = $request->builtIn;
        $specs->save();
    }
    public function updateClass(Request $request)
    {
        $class = Tugboatclass::findOrFail($request->classID);
        $class->timestamps = false;
        $class->strTugboatType = $request->tugboatType;
        $class->strClassNum = $request->classNum;
        $class->strOfficialNum = $request->officialNum;
        $class->strIMONum = $request->imoNum;
        $class->strTradingArea = $request->tradingArea;
        $class->strHomePort = $request->homePort;
        $class->enumISPSCodeCompliance = $request->ispsComp;
        $class->enumISMCodeStandard = $request->ismCode;
        $class->save(); 
        return response()->json(['class' => $class]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

     /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function please($intTugboatMainID)
    {
        $class = TugboatClass::findOrFail($intTugboatMainID);
        $main = TugboatMainSpecifications::findOrFail($intTugboatMainID);
        $specs = TugboatSpecifications::findOrFail($intTugboatMainID);
        
        $maxMain = TugboatMainSpecifications::max('intTugboatMainID');
        $maxSpecs = TugboatSpecifications::max('intTugboatSpecsID');
        $maxClass = TugboatClass::max('intTugboatClassID');
        $maxTugboat = Tugboat::max('intTugboatID');
        $maxID = [
            'tugboatID' => $maxTugboat,
            'classID' => $maxClass,
            'mainID' => $maxMain,
            'specsID' => $maxSpecs
        ];
        $tugboat = TugboatMainSpecifications::findOrFail($intTugboatMainID);
        return response()->json(['class'=> $class,'main' => $main, 'specs' => $specs, 'maxID' => $maxID]);    
    }

    public function maxid(Request $request){
        $maxMain = TugboatMainSpecifications::max('intTugboatMainID');
        $maxSpecs = TugboatSpecifications::max('intTugboatSpecsID');
        $maxClass = TugboatClass::max('intTugboatClassID');
        $maxTugboat = Tugboat::max('intTugboatID');

        $maxID = [
            'tugboatID' => $maxTugboat,
            'classID' => $maxClass,
            'mainID' => $maxMain,
            'specsID' => $maxSpecs
        ];
        return response()->json(['idList' => $maxID]);
    }
    public function delete($intTugboatMainID)
    {
        $class = TugboatClass::findOrFail($intTugboatMainID);
        $main = TugboatMainSpecifications::findOrFail($intTugboatMainID);
        $specs = TugboatSpecifications::findOrFail($intTugboatMainID);
        $tugboat = Tugboat::findOrFail($intTugboatMainID);
        
        $class->timestamps = false;
        $main->timestamps = false;
        $specs->timestamps = false;
        $tugboat->timestamps = false;
        
        $class->boolDeleted = 1;
        $main->boolDeleted = 1;
        $specs->boolDeleted = 1;
        $tugboat->boolDeleted = 1;
        
        $main->save();
        $class->save();
        $specs->save();
        $tugboat->save();
        return response()->json(['tugboat' => $tugboat]);
    }
    
}
