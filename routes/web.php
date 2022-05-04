<?php

use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::resource('contacts', ContactController::class)
    ->except(['show'])
    ->middleware(['auth:sanctum', 'verified']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/grid', function () {
    return Inertia::render('Tailwind/Grid');
})->name('grid');

Route::middleware(['auth:sanctum', 'verified'])->get('/layout', function () {
    return Inertia::render('Tailwind/Layout');
})->name('layout');

Route::middleware(['auth:sanctum', 'verified'])->get('/fixed', function () {
    return Inertia::render('Tailwind/Fixed');
})->name('fixed');

Route::middleware(['auth:sanctum', 'verified'])->get('/sticky', function () {
    return Inertia::render('Tailwind/Sticky');
})->name('sticky');

Route::middleware(['auth:sanctum', 'verified'])->get('/flex', function () {
    return Inertia::render('Tailwind/Flex');
})->name('flex');

Route::middleware(['auth:sanctum', 'verified'])->get('/google', function () {
    return Inertia::render('Platzi/Google');
})->name('google');
