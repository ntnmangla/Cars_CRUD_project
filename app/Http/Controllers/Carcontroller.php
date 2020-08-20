<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
    public function index(){

        $cars=Car::all();
        return view('index',['cars'=>$cars]);

    }
    // A method that redirect us to the editing page

    public function edit($car_id){
        $car=car::findOrFail($car_id);
        return view('edit',[
            'car'=>$car
        ]);

    }
    // A method that updates the car information
    public function update($car_id){
        $car=car::findOrFail($car_id);
        $car->make= request()->input('make');
        $car->model=request()->input('model');
        $car->produced_on=request()->input('produced_on');
        $car-> update();
        return redirect()->route("cars.index");
    }
    // A method that deletes the car
    public function destroy($car_id){
        car::destroy($car_id);
        return redirect()->route('cars.index');
    }
}

