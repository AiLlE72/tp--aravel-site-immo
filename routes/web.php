<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\Backoffice\HeatingController;
use App\Http\Controllers\Backoffice\PropertyController;
use App\Http\Controllers\Backoffice\SpecificitiesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes for home
|--------------------------------------------------------------------------
*/

Route::get('/',[ HomeController::class, 'home'])->name('home');

/*
|--------------------------------------------------------------------------
| Web Routes for user
|--------------------------------------------------------------------------
*/

Route::get('/register',[ authController::class, 'register'])->name('register');
Route::post('/register', [ authController::class,  'create']);
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login',[authController::class, 'doLogin']);
Route::post('/logout', [authController::class, 'logout'])->name('auth.logout');


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
Route::get('/property/{property}', [PropertyController::class, 'single'])->name('singleProperty');
Route::post('/property/search', [PropertyController::class, 'search']);

Route::get('/backoffice/property', [PropertyController::class, 'list'])->name("backoffice-properties-index");
Route::get('/backoffice/property/create', [PropertyController::class, 'form'])->name('properties-form');
Route::post('/backoffice/property/create', [PropertyController::class, 'create']);
Route::get('/backoffice/property/update/{property}', [PropertyController::class, 'edit'])->name('properties-edit');
Route::put('/backoffice/property/update/{property}', [PropertyController::class, 'update']);
Route::post('/backoffice/property/delete/{property}', [PropertyController::class, 'delete']);

