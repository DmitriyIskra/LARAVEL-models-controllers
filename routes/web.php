<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GroupController::class, 'index'])->name('groups');
Route::get('/groups/create', [GroupController::class, 'create'])->name('form.groups');
Route::post('/groups', [GroupController::class, 'store'])->name('create.groups');
Route::get('/groups/{group}', [GroupController::class, 'show'])->name('show.group');

Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('create.student');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('show.student');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('save.student');