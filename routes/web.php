<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::match(['POST','GET'],'/register', [AuthController::class, 'register'])->name('register');
Route::match(['POST','GET'],'/login', [AuthController::class, 'login'])->name('login');
//Route::group(['middleware' => ['auth']], function () {
    Route::get('dash/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('dash/my_tirage', [DashboardController::class, 'my_tirage'])->name('my_tirage');
Route::get('dash/participant', [DashboardController::class, 'particpant'])->name('particpant');
Route::match(['POST','GET'],'/sendLottory', [DashboardController::class, 'sendLottory'])->name('sendlottory');
//});
