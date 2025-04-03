<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index'])->name('blog.home');

Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');

/*
// Blog Home Page
Route::get('/', function () {
    return view('blog.bloghome');
})->name('blog.home');

// Individual Blog Posts
Route::get('/why_do_building_cameras_fail', function () {
    return view('blog.camera_building_issues');
})->name('blog.camera_issues');

Route::get('/step_by_step_guide_to_implementing_cloud_mitigation_strategies', function () {
    return view('blog.step_by_step_guide_to_implementing_cloud_mitigation_strategies');
})->name('blog.cloud_mitigation');
*/