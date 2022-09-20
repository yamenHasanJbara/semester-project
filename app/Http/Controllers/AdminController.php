<?php

namespace App\Http\Controllers;
use App\Taxioffice;
use App\User;
use App\Taxi;
use App\Driver;
use App\Rentaloffice;
use Illuminate\Http\Request;
use Auth;
use App\Mangerorder;

class AdminController extends Controller
{
    

public function show()
    {  
    if (Auth::User()->role == 1)
        {
            $User=User::All();
            $officeT=Taxioffice::All();
            $OfficeC=Rentaloffice::All();
            $driver=Driver::All();
            $Taxi=Taxi::All();
            $Mangerorder=Mangerorder::All();
            return view('admin',compact('User','officeT','OfficeC','driver','Taxi','Mangerorder')); 
        }

            
    return redirect('home');
}


    public function update(Request $request,User $User)
    {
        $User->update($request->all());
        return redirect('admin');


    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $office=new Taxioffice();
            $office->name=$request->input('name');
            $office->owner=$request->input('owner');
            $office->lat=$request->input('lat');
            $office->lng=$request->input('lng');
            $office->phone=$request->input('phone');
            $office->contract=$request->input('contract');
            $office->carsNumber=$request->input('cars');
            $office->save();
            
            return redirect('admin');
        }
        
    }

     public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $office=Taxioffice::find($request->input('id'));

                $office->name=$request->input('name');
            
    
                $office->owner=$request->input('owner');
            
                $office->lat=$request->input('lat');
            
                $office->lng=$request->input('lng');
        
                $office->phone=$request->input('phone');
            
                $office->contract=$request->input('contract');
                
                $office->carsNumber=$request->input('cars');
    
            $office->save();
            
            return redirect('admin');
        }   
    }

    
     public function delT(Request $request)
    {
        $office=Taxioffice::find($request->input('id'));
        $office->delete();
        return redirect('admin');


    }
    public function UpdateRole( Request $request,User $User)
    {   
        $User->idOffice=$request->input('ido');
        $User->update($request->all());
        return redirect ('admin');
    }

     public function updateidof( Request $request)
    {   
        $User=User::find($request->input('idu'));
        $User->idOffice=$request->input('idOffice');
        $User->save();
        return redirect ('admin');
    }


    public function addDrivers(Request $request)
    {

        if ($request->isMethod('post')) {
            $newDriver=new Driver();
            $newDriver->firstName=$request->input('firstName');
            $newDriver->lastName=$request->input('lastName');
            $newDriver->CurrentResidenceAddress=$request->input('CurrentResidenceAddress');
            $newDriver->phoneNumber=$request->input('phoneNumber');
            $newDriver->nationalNumber=$request->input('nationalNumber');
            $newDriver->dateOfBirth=$request->input('date_of_birth');
            $newDriver->save();
            
            return redirect('admin');
        }
    }

 public function deleteDriver(Request $request)
    {
        $newDriver=Driver::find($request->input('id'));
        $newDriver->delete();
        return redirect('admin');


    }


     public function store(Request $request)
    {
          
            $OfficeC=new Rentaloffice();
            $OfficeC->name=$request->input('name');
            $OfficeC->owner=$request->input('owner');
            $OfficeC->lat=$request->input('lat');
            $OfficeC->lng=$request->input('lng');
            $OfficeC->phone=$request->input('phone');
            $OfficeC->contract=$request->input('contract');
            $OfficeC->carsnumber=$request->input('cars');
            $OfficeC->save();
            
            return redirect('admin');
        
    }


    public function editOfficeCar(Request $request)
    {

                $OfficeC=Rentaloffice::find($request->input('id'));
                $OfficeC->name=$request->input('name');

                $OfficeC->owner=$request->input('owner');
            
                $OfficeC->lat=$request->input('lat');
            
                $OfficeC->lng=$request->input('lng');
        
                $OfficeC->phone=$request->input('phone');
            
                $OfficeC->contract=$request->input('contract');
                
                $OfficeC->carsNumber=$request->input('cars');
    
                $OfficeC->save();
            
            return redirect('admin');
          
   }

    public function delete(Request $request)
    {
        $OfficeC=Rentaloffice::find($request->input('id'));
        $OfficeC->delete();
        return redirect('admin');
    }

    public function delUser(Request $request)
    {
        $User=User::find($request->input('idu'));
        $User->delete();
        return redirect('admin');
    }

    public function addtax(Request $request)
    {
            $newTax=new Taxi();
            $newTax->TheLanternNumber=$request->input('The-lantern-number');
            $newTax->carNumber=$request->input('car-number');
            $newTax->idOffice=$request->input('IdOffice');
            $newTax->save();
            return redirect('admin');    

    }




}
