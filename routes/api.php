<?php

use App\Http\Controllers\ApiRaccoltaController;
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

Route::middleware( 'auth:api' )->get( '/user', function ( Request $request ) {
    return $request->user();
} );

Route::get( "/all", [ApiRaccoltaController::class, "index"] );
Route::post( "/add", [ApiRaccoltaController::class, "add"] );
Route::put( "/raccolta/{raccolta}", [ApiRaccoltaController::class, "update"] );
Route::delete( "/raccolta/{raccolta}", [ApiRaccoltaController::class, "delete"] );

Route::get( "/oggi", [ApiRaccoltaController::class, "raccoltaOdierna"] );
Route::get( "/raccolta/{materiale}", [ApiRaccoltaController::class, "raccoltaPerMateriale"] );