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
    return view('front_landing_view.index');
});

Route::get('rm_portfolio', function () {
    return view('admin_view.rm_report.rm_portfolio');
})->name('rm_report.rm_portfolio');

Route::get('dashboard', function () {
    return view('admin_view.rm_report.dashboard');
})->name('dashboard');

