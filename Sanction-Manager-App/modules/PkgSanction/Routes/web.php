<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return Inertia::render('PkgSanction::Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
