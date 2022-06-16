<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


// Page of form
Route::get('/form', [TestController::class, 'indexForm']);
Route::post('/form', [TestController::class, 'store'])->name('form');

// Page of viewdata
Route::get('/dataview',  [TestController::class, 'index'])->name('dataview');
