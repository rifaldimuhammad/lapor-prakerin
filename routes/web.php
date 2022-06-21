<?php

use App\Http\Controllers\absensiController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\reportController;

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

Route::get('/login', [loginController::class, 'index']);
Route::post('/loginAuth', [loginController::class, 'authenticate']);
Route::get('/logout', [loginController::class, 'logout']);

Route::get('/signup', [registerController::class, 'index']);
Route::post('/siswa', [registerController::class, 'storeSiswa']);
Route::post('/guru', [registerController::class, 'storeGuru']);

Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/absensi', [absensiController::class, 'index']);
Route::post('/absensiForm', [absensiController::class, 'storeAbsensi']);
Route::get('/absensi/delete/{id}', [absensiController::class, 'deleteAbsensi']);
Route::get('/report', [reportController::class, 'index']);
Route::post('/reportForm', [reportController::class, 'storeReport']);
Route::get('/report/delete/{id}', [reportController::class, 'deleteReport']);
Route::post('/editReport', [reportController::class, 'editReport']);
