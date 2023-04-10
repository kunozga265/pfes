<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\UserController;
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

//Unauthenticated Routes
Route::post("/users/login",[UserController::class,'login']);
Route::post("/users/register",[UserController::class,'register']);
Route::get("/meals",[MealController::class,'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//User Routes
Route::post('/users/update',[UserController::class,'update'])->middleware('auth:sanctum');

Route::post("seeder",[FoodController::class,'seeder']);

Route::group(["prefix"=>'foods'],function () {
    Route::get("/", [FoodController::class, 'index']);
    Route::get("/search/{query}", [FoodController::class, 'search']);
});

Route::group(["prefix"=>'groups'],function (){
    Route::get("/",[GroupController::class,'index']);
    Route::get("/{id}",[GroupController::class,'show']);
});

Route::group(["prefix"=>'logs','middleware'=>'auth:sanctum'],function (){
    Route::get("/{uid}",[LogController::class,'index']);
    Route::post("/{uid}",[LogController::class,'store']);
    Route::delete("/{id}/delete",[LogController::class,'destroy']);
});





