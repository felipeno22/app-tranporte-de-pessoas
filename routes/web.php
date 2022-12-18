<?php

use App\Http\Controllers\siteController;
use App\Http\Controllers\MotoristaController;
use App\Http\Controllers\PassageiroController;
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
Route::get('/',[siteController::class,'index']);


Route::get('/motorista/create',[MotoristaController::class,'create']);
Route::get('/motorista/read',[MotoristaController::class,'read']);
Route::get('/motorista/readAll',[MotoristaController::class,'readAll']);
Route::get('/motorista/update',[MotoristaController::class,'update']);
Route::get('/motorista/delete',[MotoristaController::class,'delete']);



Route::get('/passageiro/create',[PassageiroController::class,'create']);
Route::get('/passageiro/read',[PassageiroController::class,'read']);
Route::get('/passageiro/readAll',[PassageiroController::class,'readAll']);
Route::get('/passageiro/update',[PassageiroController::class,'update']);
Route::get('/passageiro/delete',[PassageiroController::class,'delete']);

