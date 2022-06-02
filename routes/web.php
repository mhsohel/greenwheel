<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FrontendController;

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

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/bill-pay',[FrontendController::class,'billPay'])->name('bill-pay');
Route::get('/report',[FrontendController::class,'report'])->name('report');
Route::get('/rules',[FrontendController::class,'rules'])->name('rules');