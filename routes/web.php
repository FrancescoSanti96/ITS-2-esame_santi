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

//  Route::get('/', [AlimentController::class, 'aliments.index'])->name('index');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [AlimentController::class, 'index'])->name('home');
// Route::get('/1', [TypeController::class, 'index'])->name('homeType');
// Route::get('/2', [LocationController::class, 'index'])->name('homeLocation');

Route::resource('aliments', AlimentController::class);
Route::resource('types', TypeController::class);
Route::resource('locations', LocationController::class);

Route::get('/locations/frigorifero', [AlimentController::class, 'frigorifero'])->name('frigorifero');
Route::get('/locations/spesa', [AlimentController::class, 'spesa'])->name('spesa');
Route::get('/locations/magazzino', [AlimentController::class, 'magazzino'])->name('magazzino');

// Route::get("location",[AlimentController::class, 'findLocation'])->name("findLocation");
