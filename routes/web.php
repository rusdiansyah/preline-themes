<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::livewire('/', 'pages::front.index')->name('front');

Route::livewire('/login', 'pages::auth.login')->name('login');

Route::group(['middleware' => ['auth']],function () {

    Route::livewire('/dashboard', 'pages::dashboard')->name('dashboard');
    Route::livewire('/settings', 'pages::settings')->name('settings');
    Route::livewire('/profil', 'pages::profil')->name('profil');

    Route::livewire('/users/user', 'pages::users.index')->name('users.user');
    Route::livewire('/users/level', 'pages::level.index')->name('users.level');

    Route::livewire('/master/blank', 'pages::master.blank')->name('master.blank');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
