<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/registration', 'App\Http\Controllers\RegistrationController@index');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store'); // New route for registration

Route::get('/movie', 'App\Http\Controllers\MdetailsController@index');
Route::get('/confirmation', 'App\Http\Controllers\ConfirmationController@index');

Route::get('/devhome', 'App\Http\Controllers\DevController@index');
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/manage', 'App\Http\Controllers\ManageController@index');
Route::get('/reservation', 'App\Http\Controllers\ReservationController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth'); // Login confirmation