<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route ::get('country','country\CountryController@Country');
Route ::get('country/{id}','Country\CountryController@CountryById');
Route ::post('country','Country\CountryController@CountrySave');
Route ::put('country/{id}','Country\CountryController@CountryUpdate');
Route ::delete('country/{id}',"Country\CountryController@CountryDelete");
*/

Route ::apiResource('country','Country\country');
