<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     dd('hello');
//     $courses = \App\Models\Course::all();
// })->name('website.home');

Route::get('/',[App\Http\Controllers\Frontend\MainHomeController::class, 'index'])->name('website.home');

Route::get('/dashboard',[App\Http\Controllers\Frontend\MainHomeController::class, 'dashboard'])->name('frontend.dashboard');

Route::get('/login',[App\Http\Controllers\Frontend\LoginController::class, 'getLogin'])->name('frontend.login');

Route::post('/login',[App\Http\Controllers\Frontend\LoginController::class, 'postLogin'])->name('frontend.postlogin');

Route::get('/register',[App\Http\Controllers\Frontend\RegisterController::class, 'getRegister'])->name('frontend.register');

Route::post('/register',[App\Http\Controllers\Frontend\RegisterController::class, 'postRegister'])->name('frontend.postregister');

Route::post('/logout', [App\Http\Controllers\Frontend\LoginController::class, 'logout'])->name('frontend.logout');

Route::get('/services',[App\Http\Controllers\Frontend\MainHomeController::class, 'services'])->name('website.services');

Route::get('/about-us',[App\Http\Controllers\Frontend\MainHomeController::class, 'aboutUs'])->name('website.about-us');

Route::get('/contact-us',[App\Http\Controllers\Frontend\MainHomeController::class, 'contactUs'])->name('website.contact-us');

Route::get('/portfolio',[App\Http\Controllers\Frontend\MainHomeController::class, 'portfolio'])->name('website.portfolio');

Route::get('/services/{slug}',[App\Http\Controllers\Frontend\MainHomeController::class, 'serviceDetail'])->name('website.service-detail');

Route::group(['middleware' => ['auth', 'check_user_active']], function () {
      
        });
    




require __DIR__.'/admin_auth.php';