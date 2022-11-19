<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlsortController;
use App\Http\Controllers\AIController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('qr-code-genaretor', function () {
    return view('qr-code');
});
Route::post('/make',[UrlsortController::class,'make']);
Route::get('/{code}',[UrlsortController::class,'show'])->name('short.show');

// AI generetor Route
Route::post('/ai',[AIController::class,'result'])->name('result');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
