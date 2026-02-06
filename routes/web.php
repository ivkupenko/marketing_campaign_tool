<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\LandingController;
use App\Http\Controllers\Public\CampaignController as PublicCampaignController;
use App\Http\Controllers\Admin\TrackController;
use App\Http\Controllers\Admin\ActionClickController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::resource('/campaigns', CampaignController::class)->except(['show']);
    Route::resource('/landings', LandingController::class)->except(['show']);
    Route::get('/action-clicks', [ActionClickController::class, 'index'])->name('action_clicks.index');
});

Route::get('/campaigns/{slug}', [PublicCampaignController::class, 'show'])->name('public.campaign.show');

Route::get('/track/{landing}', [TrackController::class, 'click'])->name('track.click');

require __DIR__.'/auth.php';
