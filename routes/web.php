<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class,'home'])->name('home');
//Route::get('/carb-info', [PageController::class,'carbInfo'])->name('carb-info');
//Route::get('/carb-counting', [PageController::class,'carbCounting'])->name('carb-counting');
//Route::get('/carb-compare', [PageController::class,'carbCompare'])->name('carb-compare');
Route::get('/support', [PageController::class,'support'])->name('support');
Route::get('/users/delete-data', [UserController::class,'delete'])->name('delete-data');
Route::delete('/users/destroy', [UserController::class,'destroy'])->name('user.destroy');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
