<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\bannercontroller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagmentController;
use App\Http\Controllers\UpcomingEventController;
use App\Http\Controllers\WebServiceController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/login', [adminController::class, 'login'])->name('login');
Route::POST('/login', [adminController::class, 'authCheck'])->name('authCheck');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [adminController::class, 'password'])->name('password');
Route::post('/forgot-password', [adminController::class, 'ForgotPassword'])->name('ForgotPassword');
Route::get('/reset-password/{token}', [adminController::class, 'ResetPassword'])->name('ResetPassword');
Route::post('/reset-password/{token}', [adminController::class, 'ResetPass'])->name('ResetPass');





Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/', [HomeController::class,'email'])->name('email');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/services', [WebServiceController::class, 'index'])->name('front.service');
Route::get('/managment', [ManagmentController::class, 'index'])->name('managment');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('store');
Route::post('/contact-us-store', [ContactController::class, 'contact_store'])->name('contact.store');
Route::get('/upcoming-event', [UpcomingEventController::class, 'index'])->name('upcoming.event');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');


    Route::get('/user', [adminController::class, 'index'])->name('index');
    Route::post('/user/store', [adminController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [adminController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [adminController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [adminController::class, 'delete'])->name('user.delete');


    Route::get('/company', [adminDashboardController::class, 'index'])->name('company.index');
    Route::post('/company/update', [adminDashboardController::class, 'update'])->name('company.update');

    Route::get('/banner', [bannercontroller::class, 'index'])->name('banner.index');
    Route::post('/banner/update', [bannercontroller::class, 'update'])->name('banner.update');

    Route::get('/slider', [sliderController::class, 'index'])->name('slider.index');
    Route::post('/slider/store', [sliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{id}/edit', [sliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [sliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/delete/{id}', [sliderController::class, 'delete'])->name('slider.delete');


    Route::get('/service', [serviceController::class, 'index'])->name('service.index');
    Route::post('/service/store', [serviceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{id}', [serviceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [serviceController::class, 'update'])->name('service.update');
    Route::get('/service/delete/{id}', [serviceController::class, 'delete'])->name('service.delete');


    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');


    Route::get('/client', [ClientController::class, 'index'])->name('client.index');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');

    Route::get('/photo', [PhotoController::class, 'index'])->name('photo.index');
    Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store');
    Route::get('/photo/edit/{id}', [PhotoController::class, 'edit'])->name('photo.edit');
    Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update');
    Route::get('/photo/delete/{id}', [PhotoController::class, 'delete'])->name('photo.delete');


    Route::get('/video_gallery', [VideoController::class, 'index'])->name('video.index');
    Route::post('/video_gallery/store', [VideoController::class, 'store'])->name('video.store');
    Route::get('/video_gallery/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::post('/video_gallery/update/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::get('/video_gallery/delete/{id}', [VideoController::class, 'delete'])->name('video.delete');

    Route::get('/map', [MapController::class, 'index'])->name('map.index');
    Route::post('/map/store', [MapController::class, 'store'])->name('map.store');
    Route::get('/map/edit/{id}', [MapController::class, 'edit'])->name('map.edit');
    Route::post('/map/update/{id}', [MapController::class, 'update'])->name('map.update');
    Route::get('/map/delete/{id}', [MapController::class, 'delete'])->name('map.delete');


});

