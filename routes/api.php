<?php

use Illuminate\Http\Request;
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


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
  Route::apiResource('employees',         EmployeeController::class);
  Route::apiResource('payrolls',          Payroll::class);
  Route::apiResource('schedules',         ScheduleController::class);
  Route::apiResource('departments',       DepartmentController::class);
  Route::apiResource('subdepartments',    SubdepartmentController::class);
  Route::apiResource('subsubdepartments', SubsubdepartmentController::class);
  Route::apiResource('addblocks',         ScheduleblocksController::class);
  // Route::apiResource('subdepartments', ScheduleController::class);
  // Route::apiResource('subsubdepartments', ScheduleController::class);
});

// Route::get('employees/getoneonly/{employee}', [EmployeeController::class, 'getOneOnly']);