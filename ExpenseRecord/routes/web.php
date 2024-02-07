<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseRecordController;
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

Route::get('/welcome',[ExpenseRecordController::class,'welcome']);

Route::get('/login',[ExpenseRecordController::class,'login']);
Route::post('/login',[ExpenseRecordController::class,'loginUser']);
Route::get('/logout',[ExpenseRecordController::class,'logout']);


Route::get('/dashboard',[ExpenseRecordController::class,'dashboard'])->middleware('guard');
Route::get('/monthlyReport/{email}',[ExpenseRecordController::class,'monthlyReport'])->middleware('guard');


Route::get('/deposit/{email}',[ExpenseRecordController::class,'deposit'])->middleware('guard');
Route::post('/deposit/{email}',[ExpenseRecordController::class,'addDeposit'])->middleware('guard');

Route::get('/Expenses/{email}',[ExpenseRecordController::class,'Expenses'])->middleware('guard');
Route::post('/Expenses/{email}',[ExpenseRecordController::class,'addExpenses'])->middleware('guard');
