<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/notes', [NoteController::class, 'index'])->name('note.index');
Route::get('/notes/create', [NoteController::class, 'create'])->name('note.create');
Route::get('/notes/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::post('/notes/store', [NoteController::class, 'store'])->name('note.store');
Route::put('/notes/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/notes/show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('/notes/delete/{note}', [NoteController::class, 'delete'])->name('note.delete');

Route::resource('/post', PostController::class);
