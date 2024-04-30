<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
    function index(){
        $prodvider = Provider::all();
        if($prodvider->isNotEmpty()){
            return response()->json(['provider'=>$prodvider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'no provider'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function store(Request $request){
        $provider = Provider::create($request->all());
        if($provider){
            return response()->json(['povider'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['povider'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function create(Request $request){
        $provider = Provider::create($request->all());
        if($provider){
            return response()->json(['povider'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['povider'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $provider = Provider::find($id);
        if($provider){
            return response()->json(['povider'=>$provider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['povider'=>'no product finded'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $provider = Provider::find($id);
        if($provider){
            $provider->update($request->all());
            return response()->json(['povider'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['povider'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function destroy($id){
        $provider = Provider::find($id);
        if($provider){
            $provider->delete();
            return response()->json(['povider'=>$provider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['povider'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function edit($id){
        $provider = Provider::find($id);
        if($provider){
            return response()->json(['povider'=>$provider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['povider'=>'no povider'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

}
