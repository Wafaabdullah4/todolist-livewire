<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Todo;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/counter', Counter::class);
Route::get('/', Todo::class);