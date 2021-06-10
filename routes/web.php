<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


// Route::get('/admin', [control_authors::class, 'index']);

Route::resource('admin', ProductController::class);
Route::get('/gambar/{image}', [ProductController::class, 'load_image']);
Route::get('/hapus/{id}', [ProductController::class, 'destroy']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::get('/update/{id}', [ProductController::class, 'update']);
