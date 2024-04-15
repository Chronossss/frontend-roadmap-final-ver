<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->name('api.')->group(function () {
    Route::get('test/get/{test_name}', [TestController::class, 'getTest'])->name('test.get');
    Route::middleware('auth')->group(function () {
        Route::post('test/save/{test}', [TestController::class, 'saveTest'])->name('test.save');
        Route::get('test/history', [TestController::class, 'getHistory'])->name('test.history');
    });
});
