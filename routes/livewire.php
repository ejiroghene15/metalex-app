<?php
use App\Livewire\Counter;
use App\Livewire\Todo;

Route::get('/counter', Counter::class);
Route::get('/todo', Todo::class);