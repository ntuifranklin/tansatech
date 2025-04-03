<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\File;

Route::get('/career', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
