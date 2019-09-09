<?php

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

Route::get('/', function () {return view('home');})->name('index');

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->name('home');

Route::get('/about', function () { return view('about'); })->name('about');

Route::get('/contact-us', function () { return view('contact-us'); })->name('contact-us');

Route::get('/faq', function () { return view('faq'); })->name('faq');

Route::get('/testimonials', function () { return view('testimonials'); })->name('testimonials');

Route::get('/privacy-policy', function () { return view('privacy-policy'); })->name('privacy-policy');

Route::get('/terms-conditions', function () { return view('terms-conditions'); })->name('terms-conditions');

//Link on the iFrame page
Route::get('/agreement', function () { return view('agreement'); })->name('agreement');

Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('verified');
Route::post('/profile', 'ProfileController@loadImage')->name('profile.loadImage');

Route::get('/register', function () { return view('auth.register'); });
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/contact', function () { return view('contact'); });
Route::post('/contact', 'Auth\RegisterController@registerContact')->name('contact');

Route::get('/practice', 'Auth\RegisterController@showPractice')->name('practice');
Route::post('/practice', 'Auth\RegisterController@registerPractice')->name('practice');

Route::get('/details', 'Auth\RegisterController@showDetails')->name('details');
Route::post('/details', 'Auth\RegisterController@registerDetails')->name('details');

Route::get('/submission', function () { return view('submission'); });
Route::post('/submission', 'Auth\RegisterController@registerSubmission')->name('submission');








