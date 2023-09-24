<?php
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/notes', [NoteController::class, 'index'])->name('note.index');
Route::get('/notes/create', [NoteController::class, 'create'])->name('note.create');

