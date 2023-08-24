<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[UserController::class,'index'])->name('enduser.index');
Route::get('majorindex',[UserController::class,'majorindex'])->name('majorindex');
Route::get('doctorindex',[UserController::class,'doctorindex'])->name('doctorindex');
Route::get('login',[UserController::class,'loginindex'])->name('login');
Route::get('register',[UserController::class,'registerindex'])->name('register');
Route::put('storeuser',[UserController::class,'store'])->name('storeuser');
Route::get('check',[UserController::class,'checkuser'])->name('check');
Route::get('show/{email}',[UserController::class,'show'])->name('show');

// major

Route::get('admin.index',[AdminController::class,'index'])->name('admin.index');
Route::controller(MajorController::class)->group(function(){
    Route::get('major','index')->name('major');
    Route::get('create','create')->name('create');
    Route::put('store','store')->name('stor');
    Route::put('updatemajor/{id}','update')->name('updatemajor');
    Route::get('editemajor/{id}','edite')->name('editemajor');
    Route::get('showmajor/{id}','show')->name('showmajor');
    Route::delete('deletemajor/{id}','delete')->name('deletemajor');
});

//doctor
Route::controller(DoctorController::class)->group(function(){
    Route::get('doctor','index')->name('doctor');
    Route::get('create','create')->name('create');
    Route::put('store','store')->name('store');
    Route::get('edite/{id}','edite')->name('editedoctor');
    Route::put('update/{id}','update')->name('update');
    Route::get('show/{id}','show')->name('showdoctor');
    Route::delete('delete/{id}','doctor')->name('delete');
    Route::get('showdoctors/{major_id}','filter')->name('showdoctors');
});
//booking
Route::controller(BookingController::class)->group(function(){
    Route::get('booking','index')->name('booking');
    Route::get('getbooking','booking')->name('getbooking');
});
//contcat
Route::controller(ContactController::class)->group(function(){
    Route::get('contact','index')->name('contact');
});
//users
Route::controller(UserController::class)->group(function(){
    Route::get('users','getindex')->name('users');
});









