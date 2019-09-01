<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Admin;
use App\Employee;
use App\Product;
use App\Order;
use App\Cart;
use App\Purchase;
use App\Commentonproduct;

use Validator;
use DateTime;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $req){
        $customer = Customer::find($req->session()->get('id'));
        return view('Customer.index', ['customer'=>$customer]);
    }
    public function availableProduct(){
        $product = Product::all();
    	return view('Customer.availableProduct',['product'=> $product]);
    }
    public function orderedProduct(Request $req){
        $product = Order::all()->where('username',$req->session()->get('user'));
    	return view('Customer.orderedProduct',['product'=> $product]);
    }
    public function cartedProduct(Request $req){
        $product = Cart::all()->where('username',$req->session()->get('user'));
    	return view('Customer.cartProduct',['product'=> $product]);
    }
    public function purchaseHistory(Request $req){
        $purchase = Purchase::all()->where('username',$req->session()->get('user'));
    	return view('Customer.purchaseHistory',['product'=> $purchase]);
    }

    public function editProfile(Request $req){
        $custo = Customer::find($req->session()->get('id'));
    	return view('Customer.editProfile', ['custo'=>$custo]);
    }
    public function updateInfo(Request $req){
        $validation = Validator::make($req->all(), [
            'name'=>'required',
            'contactnumber'=>'required',
            'email'=> 'required',
            'address'=>'required',
        ])->validate();

        $user = Customer::find($req->session()->get('id'));
        $user->Name = $req->name;
        $user->contactnumber = $req->contactnumber;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->save();
        
        $req->session()->flash('msg', "Your Info is updated Successfully");

        return view('Customer.index',  ['customer'=>$user]);        
    }
    public function changePassword(Request $req){
        $custo = Customer::find($req->session()->get('id'));
    	return view('Customer.changePassword', ['custo'=>$custo]);
    }
    public function updatePassword(Request $req){
        $validation = Validator::make($req->all(), [
            'password'=>'required|min:3',
        ])->validate();

        $user = Customer::find($req->session()->get('id'));
        $user->password = $req->password;
        $user->save();
        
        $req->session()->flash('msg', "Your Password is updated Successfully");

        return view('Customer.index',  ['customer'=>$user]);        
    }
    public function orderProduct(Request $req, $pid){

        $product = Product::find($pid);

        $order  = new Order();
        $order->productid = $product->id; 
        $order->name = $product->name;
        $order->description = $product->description;
        $order->price = $product->price;
        $order->username = $req->session()->get('user');
        $order->save();

            $req->session()->flash('msg', "You have ordered a product Successfully");

        return redirect()->route('Customer.index');      
    }
    public function cartProduct(Request $req, $pid){

        $product = Product::find($pid);

        $cart  = new Cart();
        $cart->productid = $product->id; 
        $cart->name = $product->name;
        $cart->description = $product->description;
        $cart->price = $product->price;
        $cart->username = $req->session()->get('user');
        $cart->save();

            $req->session()->flash('msg', "You have Added a product to your cart Successfully");

        return redirect()->route('Customer.index');      
    }
    public function cencelOrder(Request $req, $orderid){
        Order::destroy($orderid);
        $req->session()->flash('msg', "You have successfully cencel an Order.");
        return redirect()->route('Customer.index');
      
    }
    public function deleteCart(Request $req, $cartid){
        Cart::destroy($cartid);
        $req->session()->flash('msg', "You have successfully deleted a product from your cart.");
        return redirect()->route('Customer.index');
      
    }

    public function productDetails(Request $req, $pid){
        $product = Product::find($pid);
        $com = Commentonproduct::all()->where('productid',$pid);
        return view('Customer.productDetails',['product'=> $product, 'com'=>$com]);
    }
    public function doComment(Request $req, $pid){
            $product = Product::find($pid);

            $now = new DateTime();

        $comment  = new Commentonproduct();
        $comment->productid = $pid; 
        $comment->comment = $req->comment;
        $comment->date = $now;
        $comment->Username = $req->session()->get('user');
        $comment->save();
    

        return Back();      
        }

    public function employee(Request $req){
      $emp = Employee::all();
      return view('Customer.employeeList',['emp'=> $emp]);
    }
    public function report(Request $req){
        $order = Order::all()->where('username',$req->session()->get('user'));
        $purchase = Purchase::all()->where('username',$req->session()->get('user'));
        $com = Commentonproduct::all()->where('Username',$req->session()->get('user'));
        return view('Customer.report',['order'=> $order, 'purchase'=> $purchase, 'com'=> $com]);
      
    }



    public function searchProduct(Request $request)
    {
        if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('products')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('price', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('products')->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->name.'</td>
         <td>'.$row->price.'</td>
         <td>'.$row->description.'</td>
         <td>
            <a href="/details/'.$row->id.'" >Details</a> | 
            <a href="/order/'.$row->id.'">Order</a> |
            <a href="/cart/'.$row->id.'">Cart</a>
                              </td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="4">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       //'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }



}
