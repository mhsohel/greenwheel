<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\FrontendController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;






Auth::routes(['register' => false]);
Route::post('/user-login',[UserController::class,'userLogin'])->name('user.login');
Route::post('/user-register',[UserController::class,'fronUserStore'])->name('user-register');
Route::get('/user-dashboard',[UserController::class,'userDashboard'])->name('userdashboard')->middleware('auth');
Route::post('/change-user-password',[ProfileController::class,'updatefromfrontendPassword'])->name('change.userpassword')->middleware('auth');
Route::post('/profile-update',[ProfileController::class,'fromfrontendupdate'])->name('user.profile.update')->middleware('auth');


Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/bill-pay',[FrontendController::class,'billPay'])->name('bill-pay');
Route::get('/report',[FrontendController::class,'report'])->name('report');
Route::get('/rules',[FrontendController::class,'rules'])->name('rules');




