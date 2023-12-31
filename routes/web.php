<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/add-student',[StudentController::class,'index'])->name('add.student');
Route::get('/list-student',[StudentController::class,'studentList'])->name('student.list');
Route::post('/delete-student',[StudentController::class,'studentDelete'])->name('delete.student');

Route::get('/edit-student/{id}',[StudentController::class,'studentEdit'])->name('edit.student');
Route::post('/update-student',[StudentController::class,'studentUpdate'])->name('update.student');

