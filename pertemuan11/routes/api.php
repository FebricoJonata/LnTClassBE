<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//View
Route::get('mahasiswa', [MahasiswaController::class, 'index']);
//Create
Route::post('mahasiswa/store', [MahasiswaController::class, 'store']);
//Update
Route::post('mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
//Delete
Route::get('mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
