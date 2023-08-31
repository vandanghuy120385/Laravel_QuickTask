<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(TaskController::class)->group(function () {

    Route::get('/tasks', 'index')->name('tasks.index');

    Route::get('/tasks/create', 'create')->name('tasks.create');

    Route::get('/tasks/{task}', 'show')->name('tasks.show');

    Route::get('/tasks/edit', 'edit')->name('tasks.edit');

    Route::post('/tasks', 'store')->name('tasks.store');

    Route::put('/tasks/{task}', 'update')->name('tasks.update');

    Route::delete('/tasks/{task}', 'destroy')->name('tasks.delete');
});

Route::resource('/user', UserController::class);
