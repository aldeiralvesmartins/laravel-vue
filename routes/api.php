<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->group(function () {
    Route::prefix('/person')->middleware(['handlerException', 'checkAuthentication'])->group(function () {
        Route::get('/', ['uses' => 'ClientController@index', 'middleware' => 'checkAuthorization:Client:index']);
        Route::post('/', ['uses' => 'ClientController@create', 'middleware' => 'checkAuthorization:Client:create']);
        Route::put('/{id}', ['uses' => 'ClientController@update', 'middleware' => 'checkAuthorization:Client:update']);
        Route::delete('/{id}', ['uses' => 'ClientController@delete', 'middleware' => 'checkAuthorization:Client:delete']);
    });
});
