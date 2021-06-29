<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PackageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/',[FrontEndController::class,'index'])->name('index');
Route::get('/about-us',[FrontEndController::class,'aboutUs'])->name('about');
Route::get('/packages',[FrontEndController::class,'packages'])->name('packages');
Route::get('/book/{id}',[FrontEndController::class,'bookNow'])->name('book.now');
Route::post('/book',[FrontEndController::class,'booking'])->name('book');
Route::get('/package/detail/{id}',[FrontEndController::class,'packageDetail'])->name('package.detail');

Route::get('/contactus',[FrontEndController::class,'contactus'])->name('contactus');
Route::get('/package/detail',[FrontEndController::class,'packageDetail'])->name('package.detail');
Route::post('/contactus',[FrontEndController::class,'sendMessage'])->name('send.message');
Route::get('/all/packages',[TourPackageController::class,'index'])->name('all.packages');
Route::get('/all/tours',[TourController::class,'index'])->name('all.tours');


// Dashboard Apis

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/search/places',[FrontEndController::class,'searchPlaces'])->name('search.place');



Route::middleware(['auth'])->prefix('member')->name('member.')->group(function () {
        Route::get('/dashboard',[MemberController::class,'index'])->name('dashboard');
        Route::get('/tours',[MemberController::class,'getTours'])->name('tours');
        Route::get('/bookings',[MemberController::class,'getBookings'])->name('bookings');
        Route::get('/upcoming/tours',[MemberController::class,'upcomingTours'])->name('upcoming.tours');
        Route::get('/profile',[MemberController::class,'profile'])->name('profile');
        Route::post('/update/profile',[MemberController::class,'updateProfile'])->name('update.profile');

});
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

        Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
        Route::get('/profile',[App\Http\Controllers\Admin\AdminController::class,'profile'])->name('profile');
        Route::get('/update/password',[App\Http\Controllers\Admin\AdminController::class,'updatePasswordForm'])->name('update.password.form');
        Route::post('/update/password',[App\Http\Controllers\Admin\AdminController::class,'updatePassword'])->name('update.password');
        Route::post('/update/profile',[App\Http\Controllers\Admin\AdminController::class, 'updateProfile'])->name('update.profile');


        //USERS
        Route::get('/users',[App\Http\Controllers\Admin\UserController::class,'index'])->name('users');
        Route::get('/users/create',[App\Http\Controllers\Admin\UserController::class,'create'])->name('users.create');
        Route::post('/users',[App\Http\Controllers\Admin\UserController::class,'store'])->name('users.store');
        Route::post('/users/delete/{id}',[App\Http\Controllers\Admin\UserController::class,'delete'])->name('user.delete');
        Route::get('/users/edit/{id}',[App\Http\Controllers\Admin\UserController::class,'edit'])->name('user.edit');
        Route::post('/users/update/{id}',[App\Http\Controllers\Admin\UserController::class,'update'])->name('user.update');
        Route::post('/update/users/role',[App\Http\Controllers\Admin\UserController::class,'updateUserRole'])->name('update.user.role');

        //BOOKKINGS
        Route::get('/bookings',[App\Http\Controllers\Admin\BookingsController::class,'index'])->name('bookings');
        Route::get('/bookings/create',[App\Http\Controllers\Admin\BookingsController::class,'create'])->name('bookings.create');
        Route::post('/bookings',[App\Http\Controllers\Admin\BookingsController::class,'store'])->name('bookings.store');
        Route::post('/bookings/delete/{id}',[App\Http\Controllers\Admin\BookingsController::class,'delete'])->name('bookings.delete');
        Route::get('/bookings/edit/{id}',[App\Http\Controllers\Admin\BookingsController::class,'edit'])->name('bookings.edit');
        Route::post('/bookings/update/{id}',[App\Http\Controllers\Admin\BookingsController::class,'update'])->name('bookings.update');
        Route::post('/update/bookings/status',[App\Http\Controllers\Admin\BookingsController::class,'updateBookingStatus'])->name('update.booking.status');

        //Tours
        Route::get('/Tours',[App\Http\Controllers\Admin\ToursController::class,'index'])->name('Tours');
        Route::get('/Tours/create',[App\Http\Controllers\Admin\ToursController::class,'create'])->name('Tours.create');
        Route::post('/Tours',[App\Http\Controllers\Admin\ToursController::class,'store'])->name('Tours.store');
        Route::post('/Tours/delete/{id}',[App\Http\Controllers\Admin\ToursController::class,'delete'])->name('Tours.delete');
        Route::get('/Tours/edit/{id}',[App\Http\Controllers\Admin\ToursController::class,'edit'])->name('Tours.edit');
        Route::post('/Tours/update/{id}',[App\Http\Controllers\Admin\ToursController::class,'update'])->name('Tours.update');


        //Location
        Route::get('/locations',[App\Http\Controllers\Admin\LocationController::class,'index'])->name('locations');
        Route::get('/locations/create',[App\Http\Controllers\Admin\LocationController::class,'create'])->name('locations.create');
        Route::post('/locations',[App\Http\Controllers\Admin\LocationController::class,'store'])->name('locations.store');
        Route::post('/locations/delete/{id}',[App\Http\Controllers\Admin\LocationController::class,'delete'])->name('locations.delete');
        Route::get('/locations/edit/{id}',[App\Http\Controllers\Admin\LocationController::class,'edit'])->name('locations.edit');
        Route::post('/locations/update/{id}',[App\Http\Controllers\Admin\LocationController::class,'update'])->name('locations.update');


        //Packages
        Route::get('/packages',[App\Http\Controllers\Admin\PackageController::class,'index'])->name('packages');
        Route::get('/locations/create',[App\Http\Controllers\Admin\PackageController::class,'create'])->name('packages.create');
        Route::post('/packages',[App\Http\Controllers\Admin\PackageController::class,'store'])->name('packages.store');
        Route::post('/packages/delete/{id}',[App\Http\Controllers\Admin\PackageController::class,'delete'])->name('packages.delete');
        Route::get('/packages/edit/{id}',[App\Http\Controllers\Admin\PackageController::class,'edit'])->name('packages.edit');
        Route::post('/packages/update/{id}',[App\Http\Controllers\Admin\PackageController::class,'update'])->name('packages.update');



});


