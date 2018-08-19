<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

use App\UserType;
class UsertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usertype = UserType::where('boolDeleted',0)->get();
        return view('Usertype.index')->with('usertypes', $usertype);
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
        $usertype = new UserType;
        $usertype->timestamps = false;
        $usertype->strUserTypeName = $request->userTypeName;
        $usertype->boolDeleted = 0;
        $usertype->save();
        return response()->json(['usertype' => $usertype]);
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
    public function edit($intUserTypeID)
    {
        $user = UserType::findOrFail($intUserTypeID);
        return response()->json(['user' => $user]);
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
        $user = UserType::findOrFail($request->userTypeID);
        $user->timestamps = false;
        $user->strUserTypeName =  $request->userTypeName;
        $user->save();
        return response(['user'=>$user]);
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
    
    public function delete($intUserTypeID){
        $user = UserType::findOrFail($intUserTypeID);
        $user->timestamps = false;
        $user->boolDeleted = 1 ;
        $user->save();
        return response()->json(['usertype' => $user]);
    }
}
