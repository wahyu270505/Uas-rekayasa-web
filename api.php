<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
    Route::post('/siswa/create', [SiswaController::class,'create']);
    Route::get('/siswa/read', [SiswaController::class,'read']);
    Route::put('/siswa/update/{id}', [SiswaController::class, 'update']);
    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'delete']);
});
?>