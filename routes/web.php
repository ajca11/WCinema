<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');