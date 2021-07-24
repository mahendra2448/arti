<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\TermsController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [FrontendController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
});
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('our-approach', [FrontendController::class, 'approach'])->name('approach');
Route::get('our-team', [FrontendController::class, 'team'])->name('team');
Route::get('our-experiences', [FrontendController::class, 'experiences'])->name('experiences');

//Contact Us
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('contact/refresh', [FrontendController::class, 'refreshCaptcha'])->name('contact.refresh');
Route::post('contact/submit', [FrontendController::class, 'contactSubmit'])->name('contact.submit');

