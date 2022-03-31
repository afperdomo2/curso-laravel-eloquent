<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\ProjectController::class, 'index'])->name('home');
Route::get('/insertNewProject', [App\Http\Controllers\ProjectController::class, 'insertNewProject']);
Route::get('/updateProject', [App\Http\Controllers\ProjectController::class, 'updateProject']);
Route::get('/activeProjects', [App\Http\Controllers\ProjectController::class, 'activeProjects']);
Route::get('/physicalDelete/{id}', [App\Http\Controllers\ProjectController::class, 'physicalDelete']);
Route::get('/logicalDelete/{id}', [App\Http\Controllers\ProjectController::class, 'logicalDelete']);
Route::get('/deleteInactiveProjects', [App\Http\Controllers\ProjectController::class, 'deleteInactiveProjects']);
