<?php

namespace App\Http\Controllers;
use App\Customer;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
    	return view('Home.index');
    }

//Customer Login
    /*public function customerLogin(){
    	return view('Home.customerLogin');
    }
    public function verify(Request $req){	
        // $validation = Validator::make($req->all(), [
        //     'userType'=>'required',
        //     'username'=>'required',
        //     'password'=>'required',
        // ])->validate();

        if($req->userType == 'customer'){
            $validation = Validator::make($req->all(), [
                'userType'=>'required',
                'username'=>'required',
                'password'=>'required',
            ])->validate();

    		$result = DB::table('customers')->where('username', $req->username)
    		->where('password', $req->password)
    		->get();

    		
    		if(count($result) > 0){
    			$req->session()->put('user', $req->username);
    			$req->session()->put('id', $result[0]->id);
    			return redirect()->route('Customer.index');
    		}else{
    			$req->session()->flash('msg', 'invalid username or password');
    			return view('Home.customerLogin');
    			//return view('login.index');
    		}
        }else if($req->userType == 'admin'){
            $req->session()->flash('msg', 'Admin type is not develop yet!');
            return view('Home.customerLogin');

        }else if($req->userType == 'employee'){
            $req->session()->flash('msg', 'Employee type is not develop yet!');
            return view('Home.customerLogin');
            
        }else{
            $req->session()->flash('msg', 'Supplier type is not develop yet!');
            return view('Home.customerLogin');
        }

	}

//Customer Registration
    public function customerRegistration(){
    	return view('Home.customerRegistration');
    }
    public function register(Request  $req)
    {
    	$validation = Validator::make($req->all(), [
            'username'=>'required|unique:users',
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

    }*/

}
