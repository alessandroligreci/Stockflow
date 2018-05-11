<?php

use Illuminate\Http\Request;

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

Route::post('/crypto', 'Auth\ApiController@postUserCryptos');
Route::post('/cryptos', 'Auth\ApiController@getUserCryptos');

Route::post('/follow', 'Auth\ApiController@followUser');

Route::post('/wallet', 'Auth\ApiController@getWalletCryptos');

Route::post('/users', 'Auth\ApiController@getUsers');
