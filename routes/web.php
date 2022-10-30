<?php

use App\Http\Controllers\reviewsController;
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

Route::get('/review',[reviewsController::class, 'Barang'])->name('barang.view');
Route::get('/detail/{id}',[reviewsController::class, 'Detail'])->name('detail.view');