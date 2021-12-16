<?php

use Illuminate\Support\Facades\Route;


// Route::middleware(['auth'])->group(function () {
//     Route::post('pages/create', \App\Http\Livewire\Page\Create::class)->name('page.create');
// });

Route::group([
    'middleware' => 'web',
    'namespace' => 'Randyduran\Pagebuilder',
], function ($router) {
    require base_path('routes/web.php');
});

/**
 * Generates the route dynamically from the page slug
 */
Route::middleware(['web'])->group(function () {
    Route::get('{slug?}', \Randyduran\Pagebuilder\Http\Livewire\Page::class)->name('page.builder')->where('slug', '.+')->middleware('checkPage');
});