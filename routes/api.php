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


//  FORMALLY: Route::apiResource('/person', 'PersonController');
// switching to this will create endpoints for restful api; get, post, put, delete.


Route::prefix('v1')->group(function () {
    Route::apiResource('/person', 'Api\v1\PersonController');
});


Route::prefix('v2')->group(function () {
    Route::apiResource('/person', 'Api\v2\PersonController')->only('show');
});
