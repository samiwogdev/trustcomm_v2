<?php

use App\Http\Controllers\AuthUserController;
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


Route::get('/', [AuthUserController::class, 'home'])->name('authUser.home');
Route::post('login', [AuthUserController::class, 'login'])->name('authUser.login');

Route::group(['middleware' => ['authUser']], function () {
    //User Dashboard Route
    Route::get('/dashboard', [AuthUserController::class, 'dashboard'])->name('authUser.dashboard');
    Route::get('rm_position', [AuthUserController::class, 'rm_position'])->name('rm_position');
    Route::post('/rm_position_data', [AuthUserController::class, 'rm_position_data'])->name('rm_position_data');
    Route::post('/rm_position_data_branch', [AuthUserController::class, 'rm_position_data_branch'])->name('rm_position_data_branch');
    Route::post('/rm_branch_data', [AuthUserController::class, 'rm_branch_data'])->name('rm_branch_data');
});


Route::get('rm_portfolio', function () {
    return view('admin_view.rm_report.rm_portfolio');
})->name('rm_report.rm_portfolio');

// Route::get('/rm_position', function () {
//     return view('admin_view.rm_report.rm_position');
// })->name('rm_position');

Route::get('/rm_position_avg', function () {
    return view('admin_view.rm_report.rm_position_avg');
})->name('rm_position_avg');

Route::get('/dashboard', function () {
    return view('admin_view.rm_report.dashboard');
})->name('dashboard');
