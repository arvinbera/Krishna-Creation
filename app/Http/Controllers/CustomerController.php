<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BaseMVCController;
use Illuminate\Support\Facades\Session;
use App\Core\Helper;
use App\Product;

class CustomerController extends BaseMVCController
{
    public function register(Request $request)
    {
        $entity= new Customer();
        $entity->name= $request->name;
        $entity->email= $request->email;
        $entity->password= $request->password;
        $entity->save();
        $Customer=$this->SetSession($entity);
        return redirect('/');
    }
    public function login(Request $request)
    {
        $entity= Customer::where("email",$request->email)->where("password",$request->password)->first();
        if(!$entity)
        {
            return redirect('/signin');
        }
            $Customer=$this->SetSession($entity);
            return redirect('/');
        
    }
    public function logout()
    {
        $Customer=$this->RemoveSession();
        return redirect('/');
    }
    public function addtocart(Request $request)
    {
      $entity= new Cart();
      $entity->customer_id=$request->customer_id;
      $entity->product_id=$request->product_id;
      $entity->product_name=$request->product_name;
      $entity->amount=$request->productamount;
      $entity->price=$request->product_price;
      $entity->actualprice=$request->actual_price;
      $entity->status="Cart";
      $entity->customername=$request->customer_name;
      $entity->save();
      return redirect('/');
    }
    public function allcartitems()
    {
        $session=Session::get(Helper::$Token);
        $customerid=$session->id;
        $entity=Cart::where("customer_id",$customerid)->get();
        $total=Cart::where("customer_id",$customerid)->sum('price');
        //$actualprice=Product::where("id",$entity->product_id)->get();
        $data=array(
            "data"=>$entity,
            "totalprice"=>$total,
        );
        return view('shoppingcart',$data);
    }
    public function deletecartitem(Request $request)
    {
        $session=Session::get(Helper::$Token);
        $customerid=$session->id;
        $entity=Cart::where("customer_id",$customerid)->where("product_id",$request->product_id)->delete();
        return redirect('/allcart');
    }
    public function checkout()
    {
        $session=Session::get(Helper::$Token);
        $customerid=$session->id;
        $entity=Cart::where("customer_id",$customerid)->get();
        $total=Cart::where("customer_id",$customerid)->sum('price');
        $data= array(
            "data"=>$entity,
            "totalprice"=>$total,
        );
        return view('/checkout',$data);
    }
}
