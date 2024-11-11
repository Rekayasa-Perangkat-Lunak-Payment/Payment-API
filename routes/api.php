<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\BankAdminController;
use App\Http\Controllers\InstitutionAdminController;
use App\Models\InstitutionAdmin;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// User route with API authentication middleware
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Student routes
Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::post('/', [StudentController::class, 'store']);
    Route::get('/{id}', [StudentController::class, 'getStudent']);
    Route::put('/{id}', [StudentController::class, 'update']);
    Route::delete('/{id}', [StudentController::class, 'destroy']);
});

// Institution routes
Route::prefix('institutions')->group(function () {
    Route::get('/', [InstitutionController::class, 'index']);
    Route::post('/', [InstitutionController::class, 'store']);
    Route::get('/{id}', [InstitutionController::class, 'getInstitution']);
    Route::put('/{id}', [InstitutionController::class, 'update']);
    Route::delete('/{id}', [InstitutionController::class, 'destroy']);
});

// Institution admin routes
Route::prefix('institution-admins')->group(function () {
    Route::get('/', [InstitutionAdminController::class, 'index']);
    Route::post('/', [InstitutionAdminController::class, 'store']);
    Route::get('/{id}', [InstitutionAdminController::class, 'show']);
    Route::put('/{id}', [InstitutionAdminController::class, 'update']);
    Route::delete('/{id}', [InstitutionAdminController::class, 'destroy']);
});

// Bank admin routes
Route::prefix('bank-admins')->group(function () {
    Route::get('/', [BankAdminController::class, 'index']);
    Route::post('/', [BankAdminController::class, 'store']);
    Route::get('/{id}', [BankAdminController::class, 'show']);
    Route::put('/{id}', [BankAdminController::class, 'update']);
    Route::delete('/{id}', [BankAdminController::class, 'destroy']);
});
