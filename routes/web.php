<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function() {
// Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class, 'create'])->name('note.index');
// Route::post('/note', [NoteController::class, 'store'])->name('note.index');
// Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.index');
// Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.index');
// Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.index');
// Route::delete('/note', [NoteController::class, 'destory'])->name('note.index');


    Route::resource('note', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
