<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\FormController;



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

//Api Book//

Route::get("/book", [BookController::class,'read']);

Route::post("/book", [BookController::class,'create']);

Route::put("/book", [BookController::class,'update']);

Route::delete("/book", [BookController::class,'delete']);

//Api Form

Route::get("/form", [FormController::class,'read']);

Route::post("/form", [FormController::class,'create']);

Route::put("/form", [FormController::class,'update']);

Route::delete("/form", [FormController::class,'delete']);


