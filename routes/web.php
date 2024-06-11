<?php

use App\Http\Controllers\Group;
use App\Http\Controllers\Student;
use Illuminate\Support\Facades\Route;


Route::get('/', [Group::class, 'index'])->name('groups');
Route::get('/groups/create', [Group::class, 'create'])->name('form.groups');
Route::post('/groups', [Group::class, 'store'])->name('create.groups');
Route::get('/groups/{group}', [Group::class, 'show'])->name('show.group');

Route::get('/groups/{group}/students/create', [Student::class, 'create'])->name('create.student');
Route::get('/groups/{group}/students/{student}', [Student::class, 'show'])->name('show.student');
Route::post('/groups/{group}/students', [Student::class, 'store'])->name('save.student');