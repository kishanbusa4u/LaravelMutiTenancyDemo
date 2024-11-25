<?php

use App\Http\Controllers\TenantControler;
use App\Livewire\TenantForm;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('tenants',TenantControler::class);
    Route::get('/tenants/create', TenantForm::class)->name('tenants.create');
});
