<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DelivererController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\MessageController;

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
})->name('home');

Route::resource('cities',CityController::class);
Route::resource('deliverers',DelivererController::class);
Route::resource('neighborhoods',NeighborhoodController::class);
Route::resource('orders',OrderController::class);
Route::resource('messages',MessageController::class);
Route::resource('restaurants',RestaurantController::class);
Route::resource('stores',StoreController::class);
