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

Route::get(
    '/',    // 第一個參數
    function () // 第二個參數
    {
        return view('intro-sdgs'); // 引導至一份視圖(view)：welcome view
    }
);


// 儲存一筆資料
Route::post('oberservation/store', [ListController::class, 'store'])
    ->name('oberservation.store');
# 新增表單
Route::get('oberservation/create', [ListController::class, 'create'])
    ->name('oberservation.create');
# 查詢資料
Route::get('oberservation', [ListController::class, 'index'])
    ->name('oberservation.index');
# 顯示特定一筆資料的詳細資料
Route::get('oberservation/{id}', [ListController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('oberservation.show');
# 編輯特定一筆資料
Route::get('oberservation/{id}/edit', [ListController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->name('oberservation.edit');
// 修改資料
Route::patch('oberservation/update/{id}', [ListController::class, 'update'])
    ->where('id', '[0-9]+')
    ->name('oberservation.update');
# 刪除特定一筆資料
Route::delete('oberservation/delete/{id}', [ListController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->name('oberservation.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
