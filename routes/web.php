<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;



Route::get('/','PagesController@index')->name('home');
Route::get('/admin/dashboard','PagesController@dashboard')->name('admin.dashboard');





//Auth::routes();

//Route::get ('/home', 'HomeController@index')->name('home');


