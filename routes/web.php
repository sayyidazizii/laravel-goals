<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\GoalsController::class, 'index'])->name('index');
Route::get('/read', [App\Http\Controllers\GoalsController::class, 'read']);
Route::get('/create', [App\Http\Controllers\GoalsController::class, 'create']);
Route::get('/store', [App\Http\Controllers\GoalsController::class, 'store']);
Route::get('/show/{id}', [App\Http\Controllers\GoalsController::class, 'show']);
Route::get('/update/{id}', [App\Http\Controllers\GoalsController::class, 'update']);
Route::get('/destroy/{id}', [App\Http\Controllers\GoalsController::class, 'destroy']);
