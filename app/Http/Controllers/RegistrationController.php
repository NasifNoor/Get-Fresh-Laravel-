<?php

namespace App\Http\Controllers;

use App\Customer;
use Validator;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function customerRegistration(){
    	return view('Home.customerRegistration');
    }
    public function register(Request  $req)
    {
    	$validation = Validator::make($req->all(), [
            'username'=>'required|unique:customers',
            'password'=>'required|min:3',
            'name'=>'required',
            'contactnumber'=>'required|numeric',
            'email'=> 'required|regex:/^.+@.+$/i',
            'address'=>'required',
            'confirmPassword'=>'required|same:password',
		])->validate();
      
       
            $user  = new Customer();
            $user->username = $req->username; 
            $user->password = $req->password;
            $user->Name = $req->name;
            $user->contactnumber = $req->contactnumber;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->save();
        
            $req->session()->flash('msg', "A new Customer is added Successfully");
            
            return back();

    }

}
