<?php

use App\Http\Controllers\maincontroller;
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

Route::get('/home',[maincontroller::class,('home')]);
Route::get('/dashboardhome',[maincontroller::class,('dashboardhome')]);
Route::get('/login',[maincontroller::class,('login')]);
Route::post('/LoginUser',[maincontroller::class,('LoginUser')]);
Route::get('/registration',[maincontroller::class,('registration')]);
Route::post('/RegistrationUser',[maincontroller::class,('RegistrationUser')]);
Route::get('/logout',[maincontroller::class,('logout')]);
