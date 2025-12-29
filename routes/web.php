<?php

use App\Http\Controllers\TaskController;
use App\Livewire\ProjectManager;
use App\Livewire\TodoManager;
use Illuminate\Support\Facades\Route;

Route::get('/', TodoManager::class)->name('tasks.index');
Route::get('/projects', ProjectManager::class)->name('projects.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
