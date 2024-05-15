<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $products = Product::all();
        if($products->isNotEmpty()){
            return response()->json(['products'=>$products],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['products'=>'no products'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    
}
