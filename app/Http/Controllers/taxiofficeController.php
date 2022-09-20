<?php

namespace App\Http\Controllers;
use App\Taxioffice;
use Illuminate\Http\Request;
use App\Taxiorder;
use Auth;


class taxiofficeController extends Controller
{
    public function show(Request $request)
    {
    
    	return view('TaxiService');
    }


    public function orderlive(Request $request)
    {

    $Taxiorder=new Taxiorder();
    if ($request->input('type')=='Live') {
    
    $Taxioffice=Taxioffice::find($request->input('officeName'));
    $Taxiorder->officeName=$request->input('officeName');
    $Taxiorder->customerAddress=$request->input('from');
    $Taxiorder->reservationType=$request->input('type');
    $Taxiorder->reservationDate=date('');
    $Taxiorder->reservationTime=date('');
    $Taxiorder->idUser=Auth::User()->id;
    $Taxiorder->extraFeatures=$request->input('comment');
    $Taxiorder->duration=$request->input('duration');
    $Taxiorder->save();


    	return redirect()->back()->with("success","Your Taxi will Arrived afther few minutes");
    }
 
    if ($request->input('type')=='Reservation') {
    
    $Taxioffice=Taxioffice::find($request->input('officeName'));
    $Taxiorder->officeName=$request->input('officeName');
    $Taxiorder->customerAddress=$request->input('from');
    $Taxiorder->reservationType=$request->input('type');
    $Taxiorder->reservationDate=$request->input('date');
    $Taxiorder->reservationTime=$request->input('time');
    $Taxiorder->idUser=Auth::User()->id;
    $Taxiorder->extraFeatures=$request->input('comment');
    $Taxiorder->duration=$request->input('duration');
    $Taxiorder->save();


        return redirect()->back()->with("success","Your Reservation Has been added ");
    }
 }



}
