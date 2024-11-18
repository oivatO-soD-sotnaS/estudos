<?php

    use App\Http\Controllers\NoteController;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('note.index');
});

// Note routes
Route::get('/note/search', [NoteController::class, 'search'])->name('note.search');
Route::resource('note', NoteController::class);
