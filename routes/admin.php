<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\StudentController;

require __DIR__.'/auth/admin.php';

Route::middleware(['auth', 'verified'])->group(function () {
    //home and dashboard
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //student
    Route::resource('student', StudentController::class);

    //lecturer
    Route::resource('lecturer', LecturerController::class);
});
