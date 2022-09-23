<?php

use App\Http\Controllers\TodoController;
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

Route::get('/todo/index', [TodoController::class, 'index'])->name('index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('create');
Route::post('/todo/post', [TodoController::class, 'store'])->name('store');
Route::delete('/todo/post/{id}', [TodoController::class, 'destroy'])->name('destroy');


