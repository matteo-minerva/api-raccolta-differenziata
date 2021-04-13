<?php

use App\Http\Controllers\ApiRaccoltaController;
use Illuminate\Support\Facades\Route;

### CRUD ops
Route::get( "/", [ApiRaccoltaController::class, "index"] );
Route::post( "/add", [ApiRaccoltaController::class, "add"] );
Route::put( "/raccolta/{raccolta}", [ApiRaccoltaController::class, "update"] );
Route::delete( "/raccolta/{raccolta}", [ApiRaccoltaController::class, "delete"] );

### Custom ops
Route::get( "/giorno/{giorno}", [ApiRaccoltaController::class, "raccoltaPerGiorno"] );
Route::get( "/raccolta/{materiale}", [ApiRaccoltaController::class, "raccoltaPerMateriale"] );