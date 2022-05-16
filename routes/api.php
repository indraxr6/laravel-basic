<?php

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
use App\Http\Controllers\KelasController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
   
});

Route::post('/kelas', 'KelasController@store');

Route::post('/siswa', 'SiswaController@store');

Route::get('/siswa/{name}', [SiswaController::class, 'getName']);


Route::get('/session/show','TesController@showSession');
Route::get('/session/create','TesController@createSession');
Route::get('/session/remove','TesController@deleteSession');


