<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PositionController;
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
    return view('auth.login');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('position', [PositionController::class, 'index']);
Route::post('position', [PositionController::class, 'store']);

Route::get('employee', [EmployeeController::class, 'index']);
Route::post('employe' , [EmployeeController::class , 'store'])->name('employe.store');
Route::get('absensi', function () {
    return view('menu.absensi');
});
Route::get('division', [DivisionController::class, 'index']);
Route::post('division', [DivisionController::class, 'store']);
Route::put('division/{division}', [DivisionController::class, 'update']);
Route::delete('delete-division/{division}', [DivisionController::class, 'destroy']);
Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
