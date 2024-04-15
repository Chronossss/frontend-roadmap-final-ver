<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('index');
Route::prefix('/roadmap')->name('roadmap.')->group(function () {
    Route::get('html', function () {
        return Inertia::render('RoadMaps/HtmlRoadMap');
    })->name('html');
    Route::get('css', function () {
        return Inertia::render('RoadMaps/CssRoadMap');
    })->name('css');
    Route::get('js', function () {
        return Inertia::render('RoadMaps/JsRoadMap');
    })->name('js');
    Route::get('react', function () {
        return Inertia::render('RoadMaps/ReactRoadMap');
    })->name('react');
});


Route::get('/profile', function () {
    return Inertia::render('TestHistory');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
require __DIR__ . '/api.php';