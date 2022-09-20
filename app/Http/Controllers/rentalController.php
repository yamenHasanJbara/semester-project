<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rentaloffice;
use App\Carorder;
use Auth;


class rentalController extends Controller
{
    
	 public function show(Request $request)
    {
    
    	return view('Rental');
    }


    public function orderlive(Request $request)
    {

    $Carorder=new Carorder();
   
    $Carorder=Taxioffice::find($request->input('officeName'));
    $Carorder->officeName=$request->input('officeName');
    $Carorder->customerAddress=$request->input('from');
    $Carorder->reservationType=$request->input('type');
    $Carorder->reservationDate=date('');
    $Carorder->reservationTime=date('');
    $Carorder->idUser=Auth::User()->id;
    $Carorder->extraFeatures=$request->input('comment');
    $Carorder->duration=$request->input('duration');
    $Carorder->save();


    	return redirect()->back()->with("success","Your Reservation has been added, you have 3 day befor the reservation date to confirm the reservation");
    

}
