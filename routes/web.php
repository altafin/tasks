<?php

//use App\Http\Controllers\TaskController;
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

    Route::get('tasks', \App\Livewire\Tasks\Index::class)->name('tasks.index');
    Route::get('tasks/create', \App\Livewire\Tasks\Create::class)->name('tasks.create');
    Route::get('tasks/edit/{task}', \App\Livewire\Tasks\Edit::class)->name('tasks.edit');

//    Route::resource('laravel/tasks', TaskController::class);
});

require __DIR__.'/auth.php';
