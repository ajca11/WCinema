<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/registration', 'App\Http\Controllers\RegistrationController@index');
Route::get('/movie', 'App\Http\Controllers\MdetailsController@index');
Route::get('/confirmation', 'App\Http\Controllers\ConfirmationController@index');

Route::get('/devhome', 'App\Http\Controllers\DevController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');