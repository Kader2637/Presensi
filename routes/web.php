<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('employee' , [EmployeController::class , 'index']);
Route::get('absensi', function () {
    return view('menu.absensi');
});
Route::get('division' , [DivisionController::class , 'index']);
Route::post('division' , [DivisionController::class , 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
