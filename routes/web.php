<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\EventRegistrationController;

// Keep only the event registration and partnership (join-us) routes

Route::get('/', function () {
    return redirect()->route('partnership');
})->name('home');

Route::get('/join-us', [JoinUsController::class, 'create'])
    ->name('join_us.create');

Route::get('/partnership', function () {
    return view('partnership.index');
})->name('partnership');

Route::post('/partnership/store', [EventRegistrationController::class, 'store'])
    ->name('partnership.store');

// Instructions / Downloadable PDF (supports ?lang=sw|en)
Route::get('/partnership/instructions', [EventRegistrationController::class, 'instructionsPdf'])
    ->name('partnership.instructions');



//  AUTHENTICATED ADMIN ROUTES


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin_panel')->name('admin_panel.')->group(function () {

        // DASHBOARD
        Route::get('/dashboard', [EventRegistrationController::class, 'index'])
            ->name('dashboard');

        // EXPORT ROUTES (FIXED LOCATION)
        Route::get('/export/{type}/excel', [EventRegistrationController::class, 'exportExcel'])
            ->name('export.excel');

        Route::get('/export/{type}/pdf', [EventRegistrationController::class, 'exportPDF'])
            ->name('export.pdf');
    });

});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';