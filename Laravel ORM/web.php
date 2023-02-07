<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\membercontroller;
//use App\Http\Controllers\Simplecontroller;



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
    return view('welcome');
});

Route::get('login',[membercontroller::class,'list']);

Route::get('delete/{id}',[membercontroller::class,'delete']);

Route::get('Update/{id}',[membercontroller::class,'update']);
Route::post('Update',[membercontroller::class,'edit']);


Route::post('insert',[membercontroller::class,'index']);

Route::get('/insert', function () {
    return view('addmember');
})->name('addMember');










//  Route::get('addmember/{id}',[membercontroller::class,'Insert']);
//  Route::post('addmember',[membercontroller::class,'Index']);










