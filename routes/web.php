<?php

use App\Livewire\ListMyUsers;
use App\Livewire\UsersPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{user}', UsersPage::class);

Route::get('listUsers', ListMyUsers::class);
