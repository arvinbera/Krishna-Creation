<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\BaseMVCController;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends BaseMVCController
{
    public function List()
    {
        $entity=Product::orderBy("created_at","DESC")->get();
        $data=array(
            "list"=>$entity
        );
        return view('allproducts',$data);
    }
    public function Details(Request $request)
    {
       $entity=Product::where('id',$request->id)->first();
       $data=array(
           "data"=>$entity
       );
       return view('productdetails',$data);
    }
}
