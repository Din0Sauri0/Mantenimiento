<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EquipmentController;

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

//Auth Route
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class,'store'])->middleware('guest')->name('login');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');
Route::post('/workers', [WorkerController::class, 'create'])->name('workers');

//Dashboard Route
Route::get('/proyectos', [DashboardController::class, 'index'])->middleware('auth')->name('project');

//workers Route
Route::get('/workers', [WorkerController::class, 'index'])->middleware('auth')->name('workers');
Route::post('/workers', [WorkerController::class, 'create'])->middleware('auth')->name('workers');

//Clientes Route
Route::get('/clients', [ClientController::class, 'index'])->middleware('auth')->name('clients');
Route::post('/clients', [ClientController::class, 'store'])->middleware('auth')->name('clients');

//Equipment Route
Route::get('/equipos', [EquipmentController::class, 'index'])->middleware('auth')->name('equipment');
Route::post('/equipos', [EquipmentController::class,'store'])->middleware('auth')->name('equipment');
