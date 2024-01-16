<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RmPositionController;
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


Route::get('/', [AuthUserController::class, 'home'])->name('home');
Route::post('login', [AuthUserController::class, 'login'])->name('login');


// Restricted Routes
Route::group(['middleware' => ['authUser']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('authUser.dashboard');
    Route::get('rm_position', [RmPositionController::class, 'rm_position'])->name('rm_position');
    Route::match(['get', 'post'], '/rm_position_data', [RmPositionController::class, 'rm_position_data'])->name('rm_position_data');
    Route::match(['get', 'post'], '/rm_position_data_branch', [RmPositionController::class, 'rm_position_data_branch'])->name('rm_position_data_branch');

    // Route::post('/rm_branch_data', [RmPositionController::class, 'rm_branch_data'])->name('rm_branch_data');
    Route::get('logout', [AuthUserController::class, 'logout'])->name('logout');
});


Route::get('rm_portfolio', function () {
    return view('admin_view.rm_report.rm_portfolio');
})->name('rm_report.rm_portfolio');

Route::get('/rm_position_avg', function () {
    return view('admin_view.rm_report.rm_position_avg');
})->name('rm_position_avg');
