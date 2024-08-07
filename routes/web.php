<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
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
//Teacher Home Page
Route::middleware(['auth','role'])->group(function(){
    Route::get('/teacher/',[TeacherController::class,'index']);
    Route::get('/teacher/course',[TeacherController::class,'course']);
    Route::post('/take/{id}',[TeacherController::class,'take']);
    Route::get('/teacher/addcourse',[TeacherController::class,'addview'])->name('teacher');
    Route::post('/teacher/addcourse',[TeacherController::class,'add'])->name('teacher');
    Route::get('/teacher/assignment/upload',[TeacherController::class,'uploadview'])->name('teacher');
    Route::post('/teacher/assignment/upload',[TeacherController::class,'upload'])->name('teacher');
});
Route::middleware(['auth','student'])->group(function(){
    Route::get('/',[Pagescontroller::class,'index']);
    Route::get('/submit',[Pagescontroller::class,'submit']);

});
Route::middleware('auth')->group(function () {
    Route::get('/course/{id}',[Pagescontroller::class,'course']);
    Route::get('/update/{id}/edit',[Pagescontroller::class,'update']);
    Route::put('/update/{id}/edit',[Pagescontroller::class,'modify']);
    Route::get('/logout',[AuthenticatedSessionController::class,'destroy']);
    Route::get('/details',[Pagescontroller::class,'details']);
    Route::get('/download',[ProfileController::class,'download']);
    // Route::get('/view/{id}',[Pagescontroller::class,'viewCourse']);

});

require __DIR__.'/auth.php';
