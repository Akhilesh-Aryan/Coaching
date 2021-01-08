<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view("homepage.index");
})->name('index');

Route::get('/apply',[StudentController::class,'apply'])->name('apply');
Route::post('/apply',[StudentController::class,'applyStore'])->name('applyStore');
Route::get('/profile',[StudentController::class,'profile'])->name('profile');

Route::prefix("admin")->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/students',[AdminController::class,"students"])->name('students');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
