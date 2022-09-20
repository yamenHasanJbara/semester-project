<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Taxi;
use App\Taxioffice;
use Auth;
use App\Taxiorder;
use App\Mangerorder;
use App\Servtaxiorder;

class MangerTController extends Controller
{
 
	public function show()
    {  
    if (Auth::User()->role == 2)
        {	                      
          $servorder=DB::select('select * from servtaxiorders where officeName = ?', [Auth::user()->FirstName]);   
          $Taxi=DB::select('select * from taxis where idOffice = ?',[Auth::user()->idOffice]);
          $order= DB::select('select * from taxiorders where officeName = ?', [Auth::user()->FirstName]);
              return view('MangerTaxiOffice',compact('order','Taxi','servorder'));
        }
    return redirect('home');
}
 public function serve(Request $request)
    {
          
           $Mangerorder=new Mangerorder();
           $Mangerorder->orderType=$request->input('order-type');
           $Mangerorder->TheLanternNumber=$request->input('The-lantern-number');
           $Mangerorder->carNumber=$request->input('car-number');
           $Mangerorder->save();  
           return redirect('MangerTaxiOffice');
        
    }

    public function servord(Request $request)
    {
          
           $Servtaxiorder=new Servtaxiorder();
           $Servtaxiorder->idUser=$request->input('idUs');
           $Servtaxiorder->idTaxi=$request->input('idta');
           $Servtaxiorder->officeName=$request->input('OffNa');
           $Servtaxiorder->customerAddress=$request->input('cusAdd');
           $Servtaxiorder->reservationType=$request->input('resTy');
           $Servtaxiorder->reservationDate=$request->input('resDa');
           $Servtaxiorder->reservationTime=$request->input('resTi');
           $Servtaxiorder->extraFeatures=$request->input('ExFea');
           $Servtaxiorder->duration=$request->input('ser');
           $Servtaxiorder->served=1;
           $Servtaxiorder->save();            
           return redirect('MangerTaxiOffice');
    }

}
