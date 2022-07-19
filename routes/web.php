<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\{LoginController,StudentLoginController};
use App\Http\Controllers\Admin\{
    AdminDashboardController,
    AdminController,
    AdminStudentsController,
    StudentController,
    AdminStudentResultsController,
    SearchController,
    AdminResultsEditController,
    StudentDashboardController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/auth/login', [LoginController::class, 'getLogin'])->name('getLogin');
Route::post('/auth/login', [LoginController::class, 'postLogin'])->name('postLogin');
Route::group(['middleware'=>['admin_auth']], function(){
    Route::get('/admin/auth/srlogin', [LoginController::class, 'getSRLogin'])->name('getSRLogin');
    Route::post('/admin/auth/srlogin', [LoginController::class, 'postSRLogin'])->name('postSRLogin');
    Route::get('/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('adminDashboard');
    Route::get('/admin/logout', [AdminDashboardController::class, 'logout'])->name('logout');

    Route::resource('/admin', '\App\Http\Controllers\Admin\AdminController');
    Route::resource('/adminstudent', '\App\Http\Controllers\Admin\AdminStudentsController');
    Route::resource('/adminstudentresults', '\App\Http\Controllers\Admin\AdminStudentResultsController');
    Route::resource('/adminresultsedit', '\App\Http\Controllers\Admin\AdminResultsEditController');
    Route::get('/students/search', [SearchController::class, 'search'])->name('search');
});

Route::get('/auth/studentlogin', [StudentLoginController::class, 'getStudentLogin'])->name('getStudentLogin');
Route::post('/auth/studentlogin', [StudentLoginController::class, 'postStudentLogin'])->name('postStudentLogin');
Route::group(['middleware'=>['student_auth']], function(){
    Route::resource('/students', '\App\Http\Controllers\Admin\StudentController');
    // Route::get('/studentdashboard', [StudentDashboardController::class, 'studentDashboard'])->name('studentDashboard');
    Route::get('/student/logout', [StudentDashboardController::class, 'studentLogout'])->name('studentLogout');
});