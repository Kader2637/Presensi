<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\HomeController;
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
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [HomeController::class ,'dashboard']);
    Route::get('attendance', [AttendanceController::class, 'getAttendance'])->name('attendance.index');
    Route::get('employee', [EmployeeController::class, 'index']);
    Route::post('employe' , [EmployeeController::class , 'store'])->name('employe.store');
    Route::put('employee/{employee}', [EmployeeController::class, 'update']);
    Route::delete('delete-employee/{employee}', [EmployeeController::class, 'destroy']);
    Route::get('presensi' , [AttendanceController::class , 'getAttendance']);
    Route::get('data-absensi/export/excel', [AttendanceController::class, 'export_excel'])->name('list.attendance.admin.export.excel');
    Route::get('face' , [FaceController::class , 'index']);
    Route::get('face/detail/{id}' , [FaceController::class , 'show']);
    Route::post('face/create', [FaceController::class, 'store']);
    Route::put('face/update/{employee}', [FaceController::class, 'update'])->name('face.update');
    Route::delete('face/delete/{employee}', [FaceController::class, 'destroy'])->name('face.destroy');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
