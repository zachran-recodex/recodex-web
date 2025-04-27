<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::controller(MainController::class)->group(function () {

    Route::get('/', 'index')->name('home');

});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    // CMS Routes
    Route::prefix('cms')->name('cms.')->group(function () {
        Route::get('/faqs', App\Livewire\CMS\ManageFaqs::class)->name('faqs');
        Route::get('/services', App\Livewire\CMS\ManageServices::class)->name('services');
    });
});

require __DIR__.'/auth.php';
