<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'list'])->name('task.list');
Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/{task}/update', [TaskController::class, 'update'])->name('task.update');
Route::delete('/task/{task}/delete', [TaskController::class, 'delete'])->name('task.delete');


