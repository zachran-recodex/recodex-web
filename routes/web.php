<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

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
        Route::get('/members', App\Livewire\CMS\ManageMembers::class)->name('members');
        Route::get('/pricings', App\Livewire\CMS\ManagePricings::class)->name('pricings');
        Route::get('/projects', App\Livewire\CMS\ManageProjects::class)->name('projects');
    });
});

require __DIR__.'/auth.php';
