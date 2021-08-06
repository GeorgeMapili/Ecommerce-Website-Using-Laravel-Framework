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
Route::get('/homepage', [HomepageController::class,'homepage'])->name('/');
Route::get('/cart', [HomepageController::class, 'cartpage'])->name('cart');
Route::get('/wishlist', [HomepageController::class, 'wishlistpage'])->name('wishlist');
Route::get('/deliver', [HomepageController::class, 'deliverpage'])->name('deliver');
