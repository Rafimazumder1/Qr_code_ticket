<?php

use App\Http\Controllers\BercodeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('bercode')->name('bercode.')->group(function () {
//     Route::get('/', [BercodeController::class, 'index'])->name('code');
// });

Route::get('/{id}', [BercodeController::class, 'index'])->name('code');
