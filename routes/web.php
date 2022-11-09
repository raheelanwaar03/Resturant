<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Landing Page Routes

Route::prefix('/')->group(function () {

    Route::get('/',[LandingPageController::class,'landingPage'])->name('LandingPage');

});


require __DIR__.'/auth.php';
