<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/admin/dashboard',[PagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main',[PagesController::class, 'main'])->name('admin.main');



Auth::routes();

//Route::get ('/home', 'HomeController@index')->name('home');


