<?php

namespace App\Http\Controllers;

use App\Customer;
use Validator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	public function customerLogin(){
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
            $validation = Validator::make($req->all(), [
                'userType'=>'required',
                'username'=>'required',
                'password'=>'required',
            ])->validate();

            $result = DB::table('admins')->where('username', $req->username)
            ->where('password', $req->password)
            ->get();

            
            if(count($result) > 0){
                $req->session()->put('user', $req->username);
                $req->session()->put('id', $result[0]->id);
                return redirect()->route('Admin.index');
            }else{
                $req->session()->flash('msg', 'invalid username or password');
                return view('Home.customerLogin');
                //return view('login.index');
            }

        }else if($req->userType == 'employee'){
            $req->session()->flash('msg', 'Employee type is not develop yet!');
            return view('Home.customerLogin');
            
        }else{
            $req->session()->flash('msg', 'Supplier type is not develop yet!');
            return view('Home.customerLogin');
        }

	}
	
}
