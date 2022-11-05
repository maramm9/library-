<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/books',BooksController::class);
Route::get('/mine', [MyController::class,'index']);
Route::get('/logout', [MyController::class, 'logout'])->name('logout');
Route::post('/borrow', [MyController::class, 'borrow'])->name('borrow');
Route::get('/details/{id}', [MyController::class, 'details'])->name('details');
//Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->middleware('isAdmin');



