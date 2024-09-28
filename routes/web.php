<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BakirController;


 
// Route::get('/bakir/index', [BakirController::class, 'index']);
Route::get('/bakir/show', [BakirController::class, 'show']);
Route::get('/bakir/edit', [BakirController::class, 'edit']);
Route::get('/bakir/create', [BakirController::class, 'create']);






Route::get('/', function () {
    return view('welcome');
});


