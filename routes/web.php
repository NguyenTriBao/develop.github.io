<?php

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
/*
Route::get('/{id}', function ($id) {
    return view($id);
});
*/
Route::group(['prefix' => ''], function () {
    Route::get('/', [Controllers::class,'index']);
    Route::get('/add-to-cart/{id}', [Controllers::class,'addCart'])->name('addToCart');
    Route::get('/cart', [Controllers::class,'showCart'])->name('showCart');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
