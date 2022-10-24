<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[crudController::class,'login']);
Route::get('/registration',[crudController::class,'registration']);
Route::get('/login',[crudController::class,'login']);
Route::get('/storeData',[crudController::class,'storeData']);
Route::get('/show-data',[crudController::class,'showData']);
Route::post('/loginData',[crudController::class,'loginDataCheck']);
Route::get('/dashboard',[crudController::class,'dashboard']);
Route::get('/loginError',[crudController::class,'dashboard']);
Route::get('/myData',[crudController::class,'myData']);
Route::get('/logout',[crudController::class,'logout']);



