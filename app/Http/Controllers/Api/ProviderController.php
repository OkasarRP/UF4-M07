<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
    function index(){
        $provider = Provider::all();
        if($provider->isNotEmpty()){
            return response()->json(['provider'=>$provider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'no provider'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function store(Request $request){
        $provider = Provider::create($request->all());
        if($provider){
            return response()->json(['provider'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function create(Request $request){
        $provider = Provider::create($request->all());
        if($provider){
            return response()->json(['provider'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $provider = Provider::find($id);
        if($provider){
            return response()->json(['provider'=>$provider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'no product finded'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $provider = Provider::find($id);
        if($provider){
            $provider->update($request->all());
            return response()->json(['provider'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function destroy($id){
        $provider = Provider::find($id);
        if($provider){
            $provider->delete();
            return response()->json(['provider'=>$provider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function edit($id){
        $provider = Provider::find($id);
        if($provider){
            return response()->json(['provider'=>$provider],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['provider'=>'no provider'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

}
