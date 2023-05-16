<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;

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

// Route::get('/products', function () {
//     return view('products');
// });
Route::get('/product', [customerController::class, 'AddToCart']);

Route::get('/products', [customerController::class, 'index']);

Route::get('/product/{ID}', [customerController::class, 'AddToCart']);