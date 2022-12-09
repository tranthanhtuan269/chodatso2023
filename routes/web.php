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
Route::get('/districts/{id}', [App\Http\Controllers\HomeController::class, 'getDistricts'])->name('getDistricts');
Route::get('/wards/{id}', [App\Http\Controllers\HomeController::class, 'getWards'])->name('getWards');
Route::get('/streets/{id}', [App\Http\Controllers\HomeController::class, 'getStreets'])->name('getStreets');
Route::get('/projects/{id}', [App\Http\Controllers\HomeController::class, 'getProjects'])->name('getProjects');
Route::get('/crawlProject', [App\Http\Controllers\HomeController::class, 'crawlProject'])->name('crawlProject');

Route::resources([
    'products' => App\Http\Controllers\ProductController::class
]);