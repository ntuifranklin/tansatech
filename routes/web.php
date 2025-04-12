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

// Include Blog Routes
Route::prefix('blog')->group(function () {
    require __DIR__ . '/blog.php';
});

// Load job routes
require __DIR__.'/jobs.php';

Route::get('/career', function () {
    return view('careers');
})->name('career');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function() {
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


Route::get('/ai', function () {
    return view('ai');
});

Route::get('/operational-technology', function(){
    return view('operational-technology');
}) ;

Route::get('/casestudy', function () {
    return view('casestudy');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/partners', function () {
    return view('partners');
});

Route::get('/gasification', function () {
    return view('gasification');
});

Route::get('/combustion', function () {
    return view('combustion');
});


Route::get('/energy-storage', function () {
    return view('energy-storage');
});


Route::get('/consulting', function () {
    return view('consulting');
});


Route::get('/sustainable-systems-circular-economy', function () {
    return view('sustainable-systems-circular-economy');
});

/*
Route::get('/blog', function () {
    return view('blog.bloghome');
});


Route::get('/blog/why_do_building_cameras_fail', function () {
    return view('blog.camera_building_issues');
});


Route::get('/blog/step_by_step_guide_to_implementing_cloud_mitigation_strategies', function () {
    return view('blog.step_by_step_guide_to_implementing_cloud_mitigation_strategies');
});
*/
Route::fallback(function () {
    return view('error404');
});