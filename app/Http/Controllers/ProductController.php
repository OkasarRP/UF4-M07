<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    function find($id){
        $product = Product::find($id);
        if($product){
            return response()->json(['product'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'no product finded'],404, [], JSON_UNESCAPED_UNICODE);
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

    function update(Request $request, $id){
        $product = Product::find($id);
        if($product){
            $product->update($request->all());
            return response()->json(['product'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function delete($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json(['product'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['product'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function search(Request $request){
        $search = $request->get('search');
        $products = Product::where('name','LIKE','%'.$search.'%')->get();
        if($products->isNotEmpty()){
            return response()->json(['products'=>$products],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['products'=>'no products'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }






    /*
    $product = Product::find($id);


    $product = new Product;
    $product->name = 'Nombre del producto';
    $product->price = 100.00;
    $product->save();

    $product = Product::find($id);
    $product->name = 'Nuevo nombre';
    $product->save();



    $product = Product::find($id);
    $product->delete();



    $products = Product::where('price', '>', 100)->get();


    $product = Product::where('price', '>', 100)->first();


    $count = Product::count();



    */
}
