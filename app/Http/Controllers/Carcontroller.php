<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;

class Carcontroller extends Controller
{
    // a method that create a new car
    public function create(request $request){
        $make=$request['make'];
        $model=$request['model'];
        $produced_on=$request['produced_on'];
        $car=new Car();
        $car->make=$make;
        $car->model=$model;
        $car->produced_on=$produced_on;
        $car->save();
        return redirect()-> back();


    }
    // a method that shows all the car
    public function show(){
        $cars=Car::all();
        return view('index',['cars'=>$cars]);

    }
}
