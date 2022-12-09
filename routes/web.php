<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/crawl', [App\Http\Controllers\HomeController::class, 'crawlData'])->name('crawlData');
Route::get('/crawlDistrict', [App\Http\Controllers\HomeController::class, 'crawlDistrict'])->name('crawlDistrict');
Route::get('/crawlStreet', [App\Http\Controllers\HomeController::class, 'crawlStreet'])->name('crawlStreet');
Route::get('/crawlProject', [App\Http\Controllers\HomeController::class, 'crawlProject'])->name('crawlProject');
