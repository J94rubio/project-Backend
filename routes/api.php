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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/saludo", function (Request $request) {

    $message = ['message' => "Hola José, lo lograste perro!!!"];

    return response() -> json($message);
});

Route::post("/libro", function (Request $request) {

    $message = ['book' => "Cien Años de soledad"];

    return response() -> json($message);
});

Route::put("/playList", function (Request $request) {

    $message = [
        'lista' => [
            "cancion1" => "Perro fiel - Reykon",
            "cancion2" => "Fallaste corazon - Pedro Infante",
            "cancion3" => "Día tras día - Andres Cepeda",
            "cancion4" => "Arroyito - Fonseca",
            "playListNodal" => ["Adios amor","Nace un borracho","Aquí abajo"]
        ]];

    return response() -> json($message);
});

Route::patch("/smartPhone", function (Request $request) {

    $message = [
        'message' => ["marca" => ["Samsung", "Iphone", "Xiaomi"], "modelo" => ["Galaxy S20", "14 Pro Max", "Redmi Note 12S"]]   
    ];

    return response() -> json($message);
});

Route::delete("/series", function (Request $request) {

    $message = ['message' => "Manifiesto"];

    return response() -> json($message);
});