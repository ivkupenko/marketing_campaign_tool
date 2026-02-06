<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\LandingController;
use App\Http\Controllers\Public\CampaignController as PublicCampaignController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::resource('/campaigns', CampaignController::class)->except(['show']);
    Route::resource('/landings', LandingController::class);
});

Route::get('/campaigns/{slug}', [PublicCampaignController::class, 'show'])->name('public.campaign.show');

require __DIR__.'/auth.php';
