<?php
/// juntasmeyro.com.ar
/// https://www.apiphp.juntasmeyro.wnpower.host/public/api/materiasprimas

/// local
/// http://127.0.0.1:8000/api/pedidoitems

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
////////////////////////////////////////////////   controlers /-////////////////////////////////////////
use App\Http\Controllers\MateriasPrimasController;


Route::group(['middleware' => ['cors']], function () {
    Route::get('/materiasprimas',[ MateriasPrimasController::class, 'index']);
    Route::post('/materiasprimas',[ MateriasPrimasController::class, 'store']);
    Route::delete('/materiasprimas/{id}',[ MateriasPrimasController::class, 'destroy']);
    Route::get('/materiasprimas/{id}',[ MateriasPrimasController::class, 'show']);
    Route::post('/materiasprimas/{id}',[ MateriasPrimasController::class, 'update']);
});
