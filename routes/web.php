<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }else{
        return view('auth.login');
    }
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/task/list', [TaskController::class, ('index')])->name('task.list');
    Route::get('/task/add', [TaskController::class, ('create')])->name('task.create');
    Route::get('/task/edit/{taskId}', [TaskController::class, ('edit')])->name('task.edit');
    Route::post('/task/store', [TaskController::class, ('store')])->name('task.store');
});

require __DIR__.'/auth.php';
