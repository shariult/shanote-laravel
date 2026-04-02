<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('pages.home');
});

Route::resource("notes", NoteController::class);