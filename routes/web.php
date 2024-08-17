<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdvantagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'home'])->name('home');
Route::get('/aboutUs', [LandingPageController::class, 'about'])->name('about');
Route::get('/services', [LandingPageController::class, 'service'])->name('service');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('dashboard/about', AboutController::class);
    Route::resource('dashboard/advantages', AdvantagesController::class);
    Route::resource('dashboard/machine', MachineController::class);
    Route::resource('dashboard/service', ServiceController::class);
});

Route::get('/about', function () {
    return view('landing_page.about')->name('about');
});

require __DIR__ . '/auth.php';
