<?php

use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use App\Http\Controllers\AttendanceRuleController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employees', [EmployeeController::class, 'index']);

Route::get('attendance-rules', [AttendanceRuleController::class, 'index']);
Route::post('attendance-rules', [AttendanceRuleController::class, 'store']);
