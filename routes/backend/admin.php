<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ApproachController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\HomepageController;
use App\Http\Controllers\Backend\TeamController;
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

Route::group(['as' => 'team.'], function () {
    Route::group(['as' => 'lead.'], function () {
        Route::get('team/lead', [TeamController::class, 'indexLead'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Lead Researcher - Page'), route('admin.team.lead.index'));
            });    
        Route::post('team/lead/upload', [TeamController::class, 'uploadLead'])
            ->name('lead-upload');
        Route::post('team/lead/edit', [TeamController::class, 'editLead'])
            ->name('lead-edit');
        Route::put('team/lead/update/{id}', [TeamController::class, 'updateLead'])
        ->name('lead-update');
        Route::get('team/lead/delete/{id}', [TeamController::class, 'deleteLead'])
        ->name('lead-delete');
    });
    Route::group(['as' => 'assist.'], function () {
        Route::get('team/assist', [TeamController::class, 'indexAss'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Research and Training Assistant - Page'), route('admin.team.assist.index'));
            });    
        Route::post('team/assist/upload', [TeamController::class, 'uploadAss'])
            ->name('ass-upload');
        Route::post('team/assist/edit', [TeamController::class, 'editAss'])
            ->name('ass-edit');
        Route::put('team/assist/update/{id}', [TeamController::class, 'updateAss'])
        ->name('ass-update');
        Route::get('team/assist/delete/{id}', [TeamController::class, 'deleteAss'])
        ->name('ass-delete');
    });
});

Route::group(['as' => 'exp.'], function () {
    Route::group(['as' => 'penelitian.'], function () {
        Route::get('exp/penelitian', [ExperienceController::class, 'indexResearch'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Penelitian'), route('admin.exp.penelitian.index'));
            });    
        Route::post('exp/penelitian/upload', [ExperienceController::class, 'uploadResearch'])
            ->name('penelitian-upload');
        Route::post('exp/penelitian/edit', [ExperienceController::class, 'editResearch'])
            ->name('penelitian-edit');
        Route::put('exp/penelitian/update/{id}', [ExperienceController::class, 'updateResearch'])
        ->name('penelitian-update');
        Route::get('exp/penelitian/delete/{id}', [ExperienceController::class, 'deleteResearch'])
        ->name('penelitian-delete');
    });
    Route::group(['as' => 'pendidikan.'], function () {
        Route::get('exp/pendidikan', [ExperienceController::class, 'indexStudy'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Pendidikan & Pelatihan'), route('admin.exp.pendidikan.index'));
            });    
        Route::post('exp/pendidikan/upload', [ExperienceController::class, 'uploadStudy'])
            ->name('pendidikan-upload');
        Route::post('exp/pendidikan/edit', [ExperienceController::class, 'editStudy'])
            ->name('pendidikan-edit');
        Route::put('exp/pendidikan/update/{id}', [ExperienceController::class, 'updateStudy'])
        ->name('pendidikan-update');
        Route::get('exp/pendidikan/delete/{id}', [ExperienceController::class, 'deleteStudy'])
        ->name('pendidikan-delete');
    });
    Route::group(['as' => 'publikasi.'], function () {
        Route::get('exp/publikasi', [ExperienceController::class, 'indexPub'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Publikasi'), route('admin.exp.publikasi.index'));
            });    
        Route::post('exp/publikasi/upload', [ExperienceController::class, 'uploadPub'])
            ->name('publikasi-upload');
        Route::post('exp/publikasi/edit', [ExperienceController::class, 'editPub'])
            ->name('publikasi-edit');
        Route::put('exp/publikasi/update/{id}', [ExperienceController::class, 'updatePub'])
        ->name('publikasi-update');
        Route::get('exp/publikasi/delete/{id}', [ExperienceController::class, 'deletePub'])
        ->name('publikasi-delete');
    });
    Route::group(['as' => 'partners.'], function () {
        Route::get('exp/partners', [ExperienceController::class, 'indexPartner'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('partners'), route('admin.exp.partners.index'));
            });    
        Route::post('exp/partners/upload', [ExperienceController::class, 'uploadPartner'])
            ->name('partners-upload');
        Route::post('exp/partners/edit', [ExperienceController::class, 'editPartner'])
            ->name('partners-edit');
        Route::put('exp/partners/update/{id}', [ExperienceController::class, 'updatePartner'])
        ->name('partners-update');
        Route::get('exp/partners/delete/{id}', [ExperienceController::class, 'deletePartner'])
        ->name('partners-delete');
    });
});

// Footer Section
Route::group(['as' => 'footer.'], function () {
    Route::get('footer', [FooterController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Footer section'), route('admin.footer.index'));
        });
    Route::put('footer/update/{id}', [FooterController::class, 'updates'])
        ->name('update');
});