<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::controller(MainController::class)->group(function () {

    Route::get('/', 'index')->name('home');

    Route::get('/tentang-kami', 'about')->name('about');

    Route::get('/layanan', 'service')->name('services');

    Route::get('/layanan/{service}', 'showService')->name('services.show');

});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::prefix('dashboard')->group(function () {

        // CMS Routes
        Route::prefix('content-management-system')->name('cms.')->group(function () {
            Route::get('/', App\Livewire\CMS\Dashboard::class)->name('dashboard');
            Route::get('/faqs', App\Livewire\CMS\ManageFaqs::class)->name('faqs');
            Route::get('/services', App\Livewire\CMS\ManageServices::class)->name('services');
            Route::get('/members', App\Livewire\CMS\ManageMembers::class)->name('members');
            Route::get('/pricings', App\Livewire\CMS\ManagePricings::class)->name('pricings');
            Route::get('/projects', App\Livewire\CMS\ManageProjects::class)->name('projects');
            Route::get('/work-processes', App\Livewire\CMS\ManageWorkProcesses::class)->name('work-processes');
            Route::get('/about', App\Livewire\CMS\ManageAbout::class)->name('about');
            Route::get('/hero', App\Livewire\CMS\ManageHero::class)->name('hero');
        });

        // Settings Route
        Route::redirect('settings', 'settings/profile');
        Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
        Volt::route('settings/password', 'settings.password')->name('settings.password');
        Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
    });
});

require __DIR__.'/auth.php';
