<?php

use App\Http\Controllers\API\APIController;
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

Route::prefix('v1')->group(function () {
    Route::get('get/temperatura', [APIController::class, 'gettemperatura']);
    Route::get('get/batimento', [APIController::class, 'getbatimento']);
    Route::post('set/temperatura/{temperatura}', [APIController::class, 'settemperatura']);
    Route::post('set/batimento/{batimento}', [APIController::class, 'setbatimento']);
});
