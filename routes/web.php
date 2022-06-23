<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoItemController;
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



Route::middleware('auth:web')->group(function(){

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [TodoItemController::class, 'index'])->name('home');

    Route::post('/todo', [TodoItemController::class, 'store'])->name('todos.create');
    Route::delete('/todo/{todo_id}', [TodoItemController::class, 'destroy'])->name('todo.destroy');
    Route::put('/todo/{todo_id}', [TodoItemController::class, 'update'])->name('todo.update');

    

});

Route::middleware('guest:web')->group(function(){

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login__process', [AuthController::class, 'login__process'])->name('login__process');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register__process', [AuthController::class, 'register__process'])->name('register__process');

});

