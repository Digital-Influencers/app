<?php

use App\Http\Components\Auth\RegisterComponent;
use App\Http\Controllers\Theme\authentications\LoginCover;

Route::get('/auth/login', [LoginCover::class, 'index']);
Route::get('/auth/register')->uses(RegisterComponent::class)->name('auth.register');
