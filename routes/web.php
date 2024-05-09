<?php

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

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/projects', function () {
    return view('projects');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/casestudy', function () {
    return view('casestudy');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/partners', function () {
    return view('partners');
});

