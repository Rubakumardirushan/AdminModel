<?php

use Illuminate\Support\Facades\Route;
use Dirushan\Models\Http\Controllers\ModelController;
Route::get('/models', function () {
    return 'Hello from the models package';
});
Route::get('/admin', [ModelController::class, 'index']);
Route::post('save/admin', [ModelController::class, 'store'])->name('save.admin');
Route::get('admininfo', [ModelController::class, 'admininfo'])->name('admininfo');