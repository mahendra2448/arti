<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ApproachController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomepageController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/backyard/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

// Homepage
Route::group(['as' => 'home.'], function () {
    Route::group(['as' => 'header.'], function () {
        Route::get('homepage', [HomepageController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Homepage'), route('admin.home.header.index'));
            });
        Route::post('homepage/upload', [HomepageController::class, 'upload'])
            ->name('upload');
        Route::post('homepage/edit', [HomepageController::class, 'edit'])
            ->name('edit');
        Route::put('homepage/update/{id}', [HomepageController::class, 'update'])
            ->name('update');
        Route::get('homepage/delete/{id}', [HomepageController::class, 'delete'])
        ->name('delete');
        Route::put('homepage/desc/update/{id}', [HomepageController::class, 'updateDesc'])
            ->name('desc.update');
    });
    
    Route::group(['as' => 'exp.'], function () {
        Route::get('homepage/experiences', [HomepageController::class, 'expIndex'])
            ->name('exp-index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Experiences Thumbnails'), route('admin.home.exp.exp-index'));
            });
        Route::post('homepage/experiences/upload', [HomepageController::class, 'uploadExp'])
            ->name('exp-upload');
        Route::post('homepage/experiences/edit', [HomepageController::class, 'editExp'])
            ->name('exp-edit');
        Route::put('homepage/experiences/update/{id}', [HomepageController::class, 'updateExp'])
            ->name('exp-update');
        Route::get('homepage/experiences/delete/{id}', [HomepageController::class, 'deleteExp'])
            ->name('exp-delete');
    });
    Route::group(['as' => 'testi.'], function () {
        Route::get('homepage/testimonials', [HomepageController::class, 'testiIndex'])
            ->name('testi-index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Testimonials'), route('admin.home.testi.testi-index'));
            });
        Route::post('homepage/testimonials/upload', [HomepageController::class, 'uploadTesti'])
            ->name('testi-upload');
        Route::post('homepage/testimonials/edit', [HomepageController::class, 'editTesti'])
            ->name('testi-edit');
        Route::put('homepage/testimonials/update/{id}', [HomepageController::class, 'updateTesti'])
            ->name('testi-update');
        Route::get('homepage/testimonials/delete/{id}', [HomepageController::class, 'deleteTesti'])
            ->name('testi-delete');
    });
});

Route::group(['as' => 'about.'], function () {
    Route::get('about', [AboutController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('About Us - Page'), route('admin.about.index'));
        });
    Route::put('about/update/{id}', [AboutController::class, 'updates'])
    ->name('updates');
    Route::put('about/vis/update/{id}', [AboutController::class, 'updateVis'])
    ->name('vis.updates');
    Route::put('about/mis/update/{id}', [AboutController::class, 'updateMis'])
    ->name('mis.updates');
    
    Route::group(['as' => 'prinspes.'], function () {
        Route::post('about/prinsip/upload', [AboutController::class, 'uploadPrinsip'])
            ->name('prins-upload');
        Route::get('about/prinsip/delete/{id}', [AboutController::class, 'deletePrinsip'])
        ->name('prins-delete');
        Route::post('about/spes/upload', [AboutController::class, 'uploadSpes'])
            ->name('spes-upload');
        Route::get('about/spes/delete/{id}', [AboutController::class, 'deleteSpes'])
        ->name('spes-delete');
    });
    Route::group(['as' => 'approach.'], function () {
        Route::post('about/approach/upload', [AboutController::class, 'uploadAppr'])
            ->name('appr-upload');
        Route::post('about/edit', [AboutController::class, 'editAppr'])
            ->name('appr-edit');
        Route::put('about/approach/update/{id}', [AboutController::class, 'updateAppr'])
            ->name('appr-update');
        Route::get('about/approach/delete/{id}', [AboutController::class, 'deleteAppr'])
            ->name('appr-delete');
    });
});

Route::group(['as' => 'approach.'], function () {
    Route::get('approach', [ApproachController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Our Approach - Page'), route('admin.approach.index'));
        });
    Route::put('approach/update/{id}', [ApproachController::class, 'updates'])
    ->name('updates');
    
    Route::group(['as' => 'method.'], function () {
        Route::post('approach/method/upload', [ApproachController::class, 'uploadMet'])
            ->name('met-upload');
        Route::post('approach/edit', [ApproachController::class, 'editMet'])
            ->name('met-edit');
        Route::put('approach/method/update/{id}', [ApproachController::class, 'updateMet'])
        ->name('met-update');
        Route::get('approach/method/delete/{id}', [ApproachController::class, 'deleteMet'])
        ->name('met-delete');
    });
});
// Footer Section
// Route::group(['as' => 'footer.'], function () {
//     Route::group(['as' => 'partner.'], function () {
//         Route::get('partners', [FooterController::class, 'indexPartner'])
//             ->name('index')
//             ->breadcrumbs(function (Trail $trail) {
//                 $trail->push(__('Partners'), route('admin.footer.partner.index'));
//             });
//         Route::post('partners/upload', [FooterController::class, 'uploadPartner'])
//             ->name('upload');
//         Route::post('partners/edit', [FooterController::class, 'editPartner'])
//             ->name('edit');
//         Route::put('partners/update/{id}', [FooterController::class, 'updatePartner'])
//             ->name('update');
//         Route::get('partners/delete/{id}', [FooterController::class, 'deletePartner'])
//             ->name('delete');
//     });
//     Route::group(['as' => 'contact.'], function () {
//         Route::get('contact', [FooterController::class, 'indexContact'])
//             ->name('index')
//             ->breadcrumbs(function (Trail $trail) {
//                 $trail->push(__('Contact & Address'), route('admin.footer.contact.index'));
//             });
//         Route::put('contact/update/{id}', [FooterController::class, 'updateContact'])
//             ->name('update');
//     });
//     Route::group(['as' => 'social.'], function () {
//         Route::get('socials', [FooterController::class, 'indexSocial'])
//             ->name('index')
//             ->breadcrumbs(function (Trail $trail) {
//                 $trail->push(__('Socials'), route('admin.footer.social.index'));
//             });
//         Route::put('socials/update/{id}', [FooterController::class, 'updateSocial'])
//             ->name('update');
//     });
//     Route::group(['as' => 'download.'], function () {
//         Route::get('downloads', [FooterController::class, 'indexDownload'])
//             ->name('index')
//             ->breadcrumbs(function (Trail $trail) {
//                 $trail->push(__('Downloads'), route('admin.footer.download.index'));
//             });
//         Route::post('downloads/upload', [FooterController::class, 'uploadDownload'])
//             ->name('upload');
//         Route::post('downloads/edit', [FooterController::class, 'editDownload'])
//             ->name('edit');
//         Route::put('downloads/update/{id}', [FooterController::class, 'updateDownload'])
//             ->name('update');
//         Route::get('downloads/delete/{id}', [FooterController::class, 'deleteDownload'])
//             ->name('delete');
//     });
// });