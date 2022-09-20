<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{

public function index2()
    { 
      
        
        return view('aboutUs');
        }    
  
    public function index3()
    { 
        
        return view('contact');
            
    }
    public function index4()
    { 
        
        return view('TaxiService');
            
    }
    public function index5()
    { 
        
        return view('Rental');
            
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    { 
        if(Auth::user()->role == 2 ){
            return redirect('MangerTaxiOffice');
        }
        else{
            return view('home');
        }
    }
    
    public function password()
    { 

        return view('auth/passwords/ChangePassword');
    }
     public function account()
    { 

        return view('auth/passwords/Personal');
    }


    public function changePassword(Request $request){
    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
    // The passwords matches
    return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    }
    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
    //Current password and new password are same
    return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    }
    $validatedData = $this->validate($request,[
    'current-password' => 'required',
    'new-password' => 'required|string|min:6|confirmed',
    ]);
    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();
    return redirect()->back()->with("success","Password changed successfully !");
    }





    public function editaccount(Request $request){
    if (!(Hash::check($request->get('password'), Auth::user()->password))) {
    // Check The password
    return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    }

    $validatedData = $this->validate($request,[
    'FirstName' => 'required',
    'LastName' => 'required',
    'MobileNumber' => 'required',
    'gender' => 'required',
    ]);
    //Edit account
    $user = Auth::user();
    $user->FirstName =$request->get('FirstName');
    $user->LastName =$request->get('LastName');
    $user->MobileNumber =$request->get('MobileNumber');
    $user->gender =$request->get('gender');
    $user->save();
    return redirect()->back()->with("success","Account info apdated successfully ");
    }

    }

