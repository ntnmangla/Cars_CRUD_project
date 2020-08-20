<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'uses'=>'Carcontroller@index',
    'as'=> 'cars.index'
]);
Route::post('/create',[
    'uses'=>'Carcontroller@create',
    'as'=>'cars.create'
]);
Route::get('/cars/{car}/edit',[
    'uses'=>'Carcontroller@edit',
    'as'=>'cars.edit'
]);
Route::post('/cars/$car',[
    'cars'=>'Carcontroller@update',
    'as'=>'cars.update'
]);
Route::delete('/cars/{car}',[
    'uses'=>'Carcontroller@destroy',
    'as'=>'cars.delete'
]);
