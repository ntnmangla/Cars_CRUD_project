<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
Use App\Models\CountryModel;

class CountryController extends Controller
{
    public function Country(){
        return response()->json(CountryModel::get(),200);
    }
    public function CountryById($id){
        $country=CountryModel::find($id);
        if (is_null($country)){
            return response()->json(["message"=>"Record Not Found"],404);
        }
        return response()->json($country,200);
    }
    public function CountrySave(Request $request){

        $country=CountryModel::create($request->all());
        return response()->json($country,201);
    }
    public function CountryUpdate(Request $request,$id){
        $country=CountryModel::find($id);
        if (is_null($country)){
            return response()->json(["message"=>"Record Not Found"],404);
        }

        $country->update($request->all());
        return response()->json($country,200);
    }
    public function CountryDelete(Request $request, $id){
        $country=CountryModel::find($id);
        if (is_null($country)){
            return response()->json(["message"=>"Record Not Found"],404);
        }
        $country->delete();
        return response()->json(null,204);
    }
}
