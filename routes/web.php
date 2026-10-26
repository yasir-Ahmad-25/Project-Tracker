<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::middleware('auth')->controller(DashboardController::class)->group(function (){
    Route::get('dashboard','showDashboard')->name('admin.dashboard');

});

#Projects Routes
Route::middleware('auth')->controller(ProjectController::class)->group(function (){
    Route::get('projects','showProjects')->name('project.showProjects');
    Route::post('addproject','createProject')->name('project.createProject');
    Route::post('editproject/{id}','editProject')->name('project.editProject');
    Route::post('deleteproject/{id}','deleteProject')->name('project.deleteProject');
});

#Tasks Routes
Route::middleware('auth')->controller(TaskController::class)->group(function (){
    Route::get('gettasks','getTasks')->name('task.getTasks');
    Route::post('addtask','createTask')->name('task.createTask');
    Route::post('edittask/{id}','editTask')->name('task.editTask');
    Route::post('deletetask/{id}','deleteTask')->name('task.deleteTask');
});

Route::post('logout',[AuthController::class,'logout'])->name('auth.logout');

# Authentication
Route::middleware('guest')->controller(AuthController::class)->group(function (){
    Route::get('register','showRegister')->name('register');
    Route::get('login','showLogin')->name('login');
    Route::post('register','register')->name('auth.register');
    Route::post('login','login')->name('auth.login');
});
