<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register'=>false]);
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::resources([
    'store'=>Controllers\StoreController::class,
    'species'=>Controllers\SpeciesController::class
]);
Route::get('/{page}', [Controllers\AdminController::class,'index']);



