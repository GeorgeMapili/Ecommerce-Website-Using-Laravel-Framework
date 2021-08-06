<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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



// Homepage
Route::get('/homepage', [HomepageController::class,'homepage']);
Route::get('/cart', [HomepageController::class, 'cartpage']);
Route::get('/wishlist', [HomepageController::class, 'wishlistpage']);
Route::get('/deliver', [HomepageController::class, 'deliverpage']);
