<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\CountryModel;

use http\Env\Response;

class country extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(CountryModel::get(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $validator
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $country=CountryModel::create($request->all());
        return response()->json($country,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $country=CountryModel::find($id);
        if (is_null($country)){
            return response()->json(["message"=>"Record Not Found"],404);
        }
        return response()->json($country,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $country=CountryModel::find($id);
        if (is_null($country)){
            return response()->json(["message"=>"Record Not Found"],404);
        }

        $country->update($request->all());
        return response()->json($country,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $country=CountryModel::find($id);
        if (is_null($country)){
            return response()->json(["message"=>"Record Not Found"],404);
        }
        $country->delete();
        return response()->json(null,204);
    }
}