<?php

use App\Http\Components\Counter;
use App\Http\Components\Admin\Auth\RegisterComponent;
use App\Http\Controllers\Theme\authentications\LoginCover;

Route::get('/auth/login', [LoginCover::class, 'index']);
Route::get('/authentications/register')->uses(RegisterComponent::class)->name('auth.register');
Route::get('/counter', Counter::class);
