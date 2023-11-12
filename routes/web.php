<?php

use App\Livewire\Auth\Login;
use App\Livewire\Ponto;
use App\Livewire\PontosShow;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/', Ponto::class)->name('index');
    Route::get('/pontos', PontosShow::class)->name('show');

    Route::get('/logout',function (){
        auth()->logout();
        return redirect()->route('login');
    })->name('logout');
});


