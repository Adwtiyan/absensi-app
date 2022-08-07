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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginPage', function () {
    return view('loginPage.login');
});

Route::get('/dashboard', function () {
    return view('Dashboard.Main', [
        'title' => 'home'
    ]);
});

Route::get('/users', function () {
    return view('Dashboard.Users', [
        'title' => 'users'
    ]);
});

Route::get('/reports', function () {
    return view('Dashboard.Reports', [
        'title' => 'reports'
    ]);
});
