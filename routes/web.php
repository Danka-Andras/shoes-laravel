<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/shoes');
Route::resource('shoes', ShoeController::class);
