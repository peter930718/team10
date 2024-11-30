<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;

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
Route::get('/',[ListController::class,'index'])->name('intro-sdgs');
Route::get('oberservation', [ListController::class, 'index'])->name('oberservation.index');
Route::get('oberservation/{id}', [ListController::class, 'show'])->where('id', '[0-9]+')->name('oberservation.show');
