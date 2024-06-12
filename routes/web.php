<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

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

Auth::routes();
//Emplyee Crud
Route::get('/home', [EmployeeController::class, 'index'])->name('home');
Route::get('/employeeform', [EmployeeController::class, 'add'])->name('add');

Route::post('/employeedata', [EmployeeController::class, 'store'])->name('employeedata');
Route::get('/delete/{id}',[EmployeeController::class, 'delete']);
Route::get('/edit/{id}',[EmployeeController::class, 'edit']);
Route::post('/update',[EmployeeController::class, 'update']);
