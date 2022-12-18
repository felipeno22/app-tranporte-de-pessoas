<?php

use App\Http\Controllers\siteController;
use App\Http\Controllers\MotoristaController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/motorista/create',[MotoristaController::class,'create']);
Route::get('/motorista/read',[MotoristaController::class,'read']);
Route::get('/motorista/readAll',[MotoristaController::class,'readAll']);
Route::get('/motorista/update',[MotoristaController::class,'update']);
Route::get('/motorista/delete',[MotoristaController::class,'delete']);
Route::get('/',[siteController::class,'index']);
