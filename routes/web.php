<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [HomeController::class , "index"])->name("home.index");


Route::post('/task/store' , [TaskController::class , "store"])->name("tasks.store");
Route::put('/task/{task}/update' , [TaskController::class , "update"])->name("tasks.update");
Route::put('/task/{task}/done' , [TaskController::class , "done"])->name("tasks.done");
Route::put('/task/{task}/undone' , [TaskController::class , "undone"])->name("tasks.undone");
Route::delete('/task/{task}/destroy' , [TaskController::class , "destroy"])->name("tasks.destroy");
