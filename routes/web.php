<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

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


Route::get('/', [LinkController::class, 'index']);
// 'LinkController@index' didn't work for some reason

Route::post('/store', [LinkController::class, 'store'])->name('link.store');

Route::get('/{shortcode}', [LinkController::class, 'show'])->name('link.show');