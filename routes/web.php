<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ConfirmationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\BookingController;

Route::get('/booking', [BookingController::class, 'index'])->name('details.booking');

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware('auth')->name('home');
Route::get('/registration', 'App\Http\Controllers\RegistrationController@index');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store'); 

Route::get('/movie', 'App\Http\Controllers\MdetailsController@index');
Route::get('/confirmation', [ConfirmationController::class, 'index'])->name('details.confirmation');
Route::get('/booking', 'App\Http\Controllers\BookingController@index');

Route::get('/devhome', 'App\Http\Controllers\DevController@index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edituser');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/manage', 'App\Http\Controllers\ManageController@index');
Route::get('/createm', 'App\Http\Controllers\CreatemController@index');
Route::get('/manage/manage', [ManageController::class, 'index'])->name('manage.manage');
Route::post('/manage', [ManageController::class, 'store'])->name('manage.store');
Route::get('/manage/edit/{id}', [ManageController::class, 'edit'])->name('manage.editmovies');
Route::put('/manage/update/{id}', [ManageController::class, 'update'])->name('manage.update');
Route::delete('/manage/delete/{id}', [ManageController::class, 'destroy'])->name('manage.destroy');
Route::get('/manage', [ManageController::class, 'index'])->name('manage.index');

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/reservation', [ReservationController::class, 'index'])->name('reservations.reservation');
Route::get('/reservations/edit/{id}', [ReservationController::class, 'edit'])->name('reservations.editreserve');
Route::put('/reservations/update/{id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/delete/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/login');
});

Route::get('/booking', [ReservationController::class, 'showForm'])->name('details.booking');
Route::post('/booking', [ReservationController::class, 'store'])->name('reservation.store');

