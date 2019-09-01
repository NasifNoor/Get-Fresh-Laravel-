<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Product;
use App\Order;
use App\Purchase;
use Illuminate\Http\Request;
use DateTime;

class AdminController extends Controller
{
    public function index(Request $req){
        $admin = Admin::find($req->session()->get('id'));
        return view('Admin.index', ['admin'=>$admin]);
    }
    public function availableProduct(){
        $product = Product::all();
    	return view('Admin.availableProduct',['product'=> $product]);
    }
    public function orders(){
        $orders = Order::all();
    	return view('Admin.orders',['orders'=> $orders]);
    }
    public function confirm(Request $req, $oid){
        $order = Order::find($oid);
        $now = new DateTime();

        $purchase  = new Purchase();
        $purchase->productid = $order->productid; 
        $purchase->name = $order->name;
        $purchase->date = $now;
        $purchase->price = $order->price;
        $purchase->username = $order->username;
        $purchase->save();

        Order::destroy($oid);

            $req->session()->flash('msg', "Sold");


        return Back();      
    }
}
