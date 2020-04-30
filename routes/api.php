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

Route::get('/getBackground', 'ApiController@getBackground');
Route::post('/postLogin', 'ApiController@postLogin');
Route::get('/getAio', 'ApiController@getAio');
Route::get('/getMod', 'ApiController@getMod');
Route::get('/getNormal', 'ApiController@getNormal');
