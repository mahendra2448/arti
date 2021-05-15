<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('our-approach', [HomeController::class, 'approach'])->name('approach');
Route::get('our-team', [HomeController::class, 'team'])->name('team');
Route::get('our-experiences', [HomeController::class, 'experiences'])->name('experiences');

//Contact Us
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('contact/refresh', [HomeController::class, 'refreshCaptcha'])->name('contact.refresh');
Route::post('contact/submit', [HomeController::class, 'contactSubmit'])->name('contact.submit');

