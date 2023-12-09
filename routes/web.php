<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HeaDerController;
use App\Http\Controllers\FooTerController;
use App\Http\Controllers\ProDuctsController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/admin', [LoginController::class, 'index']);
Route::any('/login', [LoginController::class, 'login']);
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');


Route::post('/send-mail', [SendMailController::class, 'index']);
Route::any('/dashboard', [DashBoardController::class, 'index']);
Route::post('/header', [HeaDerController::class, 'index']);
Route::post('/footer', [FooTerController::class, 'index']);
Route::post('/products', [ProDuctsController::class, 'index']);





Route::get('/test', [DashBoardController::class, 'ConectDB']);
