<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AlimentController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocationController;

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

Route::get('/', [AlimentController::class, 'index'])->name('home');

Route::resource('aliments', AlimentController::class);
Route::resource('types', TypeController::class);
Route::resource('locations', LocationController::class);

Route::get('/findLocations/refrigerator', [AlimentController::class, 'refrigerator'])->name('refrigerator');
Route::get('/findLocations/shop', [AlimentController::class, 'shop'])->name('shop');
Route::get('/findLocations/warehouse', [AlimentController::class, 'warehouse'])->name('warehouse');

