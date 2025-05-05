<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');

Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/registration', 'App\Http\Controllers\RegistrationController@index');
Route::get('/movie', 'App\Http\Controllers\MdetailsController@index');
Route::get('/confirmation', 'App\Http\Controllers\ConfirmationController@index');
Route::get('/booking', 'App\Http\Controllers\BookingController@index');

Route::get('/devhome', 'App\Http\Controllers\DevController@index');
Route::get('/users', 'App\Http\Controllers\UserController@index');

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/users', [UserController::class, 'edit'])->name('users.users');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edituser');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/manage', 'App\Http\Controllers\ManageController@index');
Route::get('/createm', 'App\Http\Controllers\CreatemController@index');
Route::get('/manage/manage', [ManageController::class, 'index'])->name('manage.manage');
Route::get('/manage/edit/{id}', [ManageController::class, 'edit'])->name('manage.editmovies');
Route::put('/manage/update/{id}', [ManageController::class, 'update'])->name('manage.update');
Route::delete('/manage/delete/{id}', [ManageController::class, 'destroy'])->name('manage.destroy');

Route::get('/reservation', 'App\Http\Controllers\ReservationController@index');
Route::get('/reservations/reservation', [ReservationController::class, 'edit'])->name('reservations.reservation');
Route::get('/reservations/edit/{id}', [ReservationController::class, 'edit'])->name('reservations.editreserve');
Route::put('/reservations/update/{id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/delete/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');



