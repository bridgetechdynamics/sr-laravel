<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('home'); });
//Route::get('/home', function () { return view('home'); });
//Route::get('/about', function () { return view('about'); });
//Route::get('/services', function () { return view('services'); });

Route::get('/about-us.html', function () { return view('about-us'); });
Route::get('/all-locations.html', function () { return view('all-locations'); });
Route::get('/camps.html', function () { return view('camps'); });
Route::get('/contact-us.html', function () { return view('contact-us'); });
Route::get('/fitness.html', function () { return view('fitness'); });
Route::get('/franchise.html', function () { return view('franchise'); });
Route::get('/gallery.html', function () { return view('gallery'); });
Route::get('/', function () { return view('index'); });
Route::get('/index.html', function () { return view('index'); });
Route::get('/legal.html', function () { return view('legal'); });
Route::get('/location.html', function () { return view('location'); });
Route::get('/memberships.html', function () { return view('memberships'); });
Route::get('/open-play.html', function () { return view('open-play'); });
Route::get('/parties.html', function () { return view('parties'); });
Route::get('/private-play.html', function () { return view('private-play'); });


//Route::view('/', 'welcome')->name('welcome');
//Route::view('/', 'about')->name('about');
//Route::view('/', 'services')->name('services');
