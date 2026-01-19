<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('home'); });
//Route::get('/home', function () { return view('home'); });
//Route::get('/about', function () { return view('about'); });
//Route::get('/services', function () { return view('services'); });

Route::get('/about-us.html', function () { return view('pages.about-us'); });
Route::get('/all-locations.html', function () { return view('pages.all-locations'); });
Route::get('/camps.html', function () { return view('pages.camps'); });
Route::get('/contact-us.html', function () { return view('pages.contact-us'); });
Route::get('/fitness.html', function () { return view('pages.fitness'); });
Route::get('/franchise.html', function () { return view('pages.franchise'); });
Route::get('/gallery.html', function () { return view('pages.gallery'); });
Route::get('/', function () { return view('pages.index'); });
Route::get('/index.html', function () { return view('pages.index'); });
Route::get('/legal.html', function () { return view('pages.legal'); });
Route::get('/location.html', function () { return view('pages.location'); });
Route::get('/memberships.html', function () { return view('pages.memberships'); });
Route::get('/open-play.html', function () { return view('pages.open-play'); });
Route::get('/parties.html', function () { return view('pages.parties'); });
Route::get('/private-play.html', function () { return view('pages.private-play'); });


//Route::view('/', 'welcome')->name('welcome');
//Route::view('/', 'about')->name('about');
//Route::view('/', 'services')->name('services');
