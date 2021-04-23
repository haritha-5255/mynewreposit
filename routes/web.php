<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\testcontroler;

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

Route::get('/', function () {
   // return view('welcome');
   // return view('table');
   return view('navbar');

});
Route::view('/home2','test');
#to control
Route::get('/profile',[testcontroler::class,'TestFun']);
Route:: view('/test1', 'test');