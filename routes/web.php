<?php

use App\Http\Controllers\AbsenKaryawan;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
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

Route::get('/loginPage', [loginController::class, 'index']);
Route::post('/loginPage', [loginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'mainDashboard']);
Route::get('/users', [userController::class, 'index']);
Route::get('/reports', [DashboardController::class, 'reportDashboard']);

Route::get('/absenKaryawan', [AbsenKaryawan::class, 'index']);
// Route::post('/absenKaryawan', [AbsenKaryawan::class, 'store']);

Route::get('/add-user', [userController::class, 'create']);
Route::post('/add-user', [userController::class, 'store']);
