<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\DsController;



// Route to get all ads with status 1
Route::get('/adds/viewall', [AddsController::class, 'getAllAdds']);


// Route to get all offers with status 1
Route::get('/offers/viewall', [OffersController::class, 'getAllOffers']);

// Route to get all ds with status 1
Route::get('/dscollection/viewall', [DsController::class, 'getAllDs']);


