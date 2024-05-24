<?php

use App\Http\Controllers\Backoffice\HeatingController;
use App\Http\Controllers\Backoffice\PropertyController;
use App\Http\Controllers\Backoffice\SpecificitiesController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[ HomeController::class, 'home'])->name('home');


/*
|--------------------------------------------------------------------------
| Web Routes for heating
|--------------------------------------------------------------------------
*/
Route::get('/backoffice/heating',[HeatingController::class, 'index'])->name("heating-index");
Route::post('/backoffice/heating/create', [HeatingController::class, 'create']);
Route::post('/backoffice/heating/update/{heating}', [HeatingController::class,'update']);
Route::post('/backoffice/heating/delete/{heating}', [HeatingController::class,'delete']);


/*
|--------------------------------------------------------------------------
| Web Routes for specificities
|--------------------------------------------------------------------------
*/
Route::get('/backoffice/specificities',[SpecificitiesController::class, 'index'])->name("specificities-index");
Route::post('/backoffice/specificities/create',[SpecificitiesController::class, 'create']);
Route::post('/backoffice/specificities/update/{specificities}',[SpecificitiesController::class,'update']);
Route::post('/backoffice/specificities/delete/{specificities}',[SpecificitiesController::class,'delete']);

/*
|--------------------------------------------------------------------------
| Web Routes for property
|--------------------------------------------------------------------------
*/
Route::get('/property', [PropertyController::class, 'index'])->name("properties-index");
Route::get('/backoffice/property/create', [PropertyController::class, 'create'])->name('properties-create');
Route::post('/backoffice/property/form', [PropertyController::class, 'store']);

