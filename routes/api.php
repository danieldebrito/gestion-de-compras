<?php
/// juntasmeyro.com.ar
/// https://www.apiphp.juntasmeyro.wnpower.host/public/api/descuentos

/// local
/// http://127.0.0.1:8000/api/pedidoitems

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
////////////////////////////////////////////////   controlers /-////////////////////////////////////////
use App\Http\Controllers\EmpleadoController;
Route::group(['middleware' => ['cors']], function () {
    Route::get('/empleados',[ EmpleadoController::class, 'index']);
    Route::post('/empleados',[ EmpleadoController::class, 'store']);
    Route::delete('/empleados/{id}',[ EmpleadoController::class, 'destroy']);
    Route::get('/empleados/{id}',[ EmpleadoController::class, 'show']);
    Route::post('/empleados/{id}',[ EmpleadoController::class, 'update']);
});
