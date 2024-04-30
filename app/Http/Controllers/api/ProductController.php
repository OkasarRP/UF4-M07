<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        if($products->isNotEmpty()){
            return response()->json(['products'=>$products],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['products'=>'no products'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function store(Request $request){
        $product = Product::create($request->all());
        if($product){
            return response()->json(['product'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function create(Request $request){
        $product = Product::create($request->all());
        if($product){
            return response()->json(['product'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $product = Product::find($id);
        if($product){
            return response()->json(['product'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'no product finded'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $product = Product::find($id);
        if($product){
            $product->update($request->all());
            return response()->json(['product'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function destroy($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json(['product'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function edit($id){
        $product = Product::find($id);
        if($product){
            return response()->json(['product'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
