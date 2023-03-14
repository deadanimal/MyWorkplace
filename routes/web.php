<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\WebEmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'show_home']);

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [WebEmployeeController::class, 'show_dashboard']);

    Route::get('/create-organisation', [WebOrganisationController::class, 'show_create_organisation']);
    
    Route::post('/organisations', [WebOrganisationController::class, 'create_organisation']);
    Route::get('/organisation', [WebOrganisationController::class, 'show_organisation']);
    Route::put('/organisation', [WebOrganisationController::class, 'update_organisation']);


});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    
    Route::get('/dashboard', [AdminDashboardController::class, 'show_dashboard']);

    Route::get('/create-organisation', [AdminOrganisationController::class, 'show_create_organisation']);
    
    Route::get('/organisations', [AdminOrganisationController::class, 'show_organisations']);
    Route::post('/organisations', [AdminOrganisationController::class, 'create_organisation']);
    Route::get('/organisations/{organisation_id}', [AdminOrganisationController::class, 'show_organisation']);
    Route::put('/organisations/{organisation_id}', [AdminOrganisationController::class, 'update_organisation']);

    
});
