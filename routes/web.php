<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\FrontendController;
use App\Http\Controllers\Backend\UserController;






Auth::routes(['register' => false]);
Route::post('/user-login',[UserController::class,'userLogin'])->name('user.login');
Route::post('/user-register',[UserController::class,'fronUserStore'])->name('user-register');


Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/bill-pay',[FrontendController::class,'billPay'])->name('bill-pay');
Route::get('/report',[FrontendController::class,'report'])->name('report');
Route::get('/rules',[FrontendController::class,'rules'])->name('rules');




