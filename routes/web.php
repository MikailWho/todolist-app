<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [App\Http\Controllers\TodoController::class, 'index'])->name('todos.index');
    Route::get('/index', function () {
        return view('todos.index');
    });



    Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index'])->name('todos.index');
        Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todos.create');
        Route::post('/todos', [App\Http\Controllers\TodoController::class, 'store'])->name('todos.store');
        Route::get('/todos/{todo}/edit', [App\Http\Controllers\TodoController::class, 'edit'])->name('todos.edit');
        Route::put('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'update'])->name('todos.update');
        Route::delete('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('todos.destroy');
        Route::get('/login', [LoginController::class, 'showLogin']);
        Route::post('/login', [LoginController::class, 'doLogin']);
        Route::get('/logout', [LoginController::class, 'doLogout']);
    

