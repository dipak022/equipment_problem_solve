<?php

Route::group(['prefix'=>'superadmin', 'middleware'=>['isSuperadmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[App\Http\Controllers\Superadmin\SuperAdminController::class,'index'])->name('superadmin.dashboard');
    

    // manage branch route here 
    Route::resource('/branch', App\Http\Controllers\Superadmin\BranchController::class);
    Route::post('/branch_status', [App\Http\Controllers\Superadmin\BranchController::class, 'BranchStatus'])->name('branch.status');

    // manage banner route here 
    Route::resource('/banner', App\Http\Controllers\Superadmin\BannerController::class);
    Route::post('/banner_status', [App\Http\Controllers\Superadmin\BannerController::class, 'BannerStatus'])->name('banner.status');

    // manage aboutus route here 
    Route::resource('/about_us', App\Http\Controllers\Superadmin\AboutContrioler::class);
    Route::post('/about_us_status', [App\Http\Controllers\Superadmin\AboutContrioler::class, 'AboutUsStatus'])->name('about_us.status');

     // manage service route here 
     Route::resource('/service', App\Http\Controllers\Superadmin\ServiceController::class);
     Route::post('/service_status', [App\Http\Controllers\Superadmin\ServiceController::class, 'ServiceStatus'])->name('service.status');

     // manage question route here 
     Route::resource('/question', App\Http\Controllers\Superadmin\QuestionController::class);
     Route::post('/question_status', [App\Http\Controllers\Superadmin\QuestionController::class, 'QuestionStatus'])->name('question.status');


     // manage question route here 
     Route::resource('/setting', App\Http\Controllers\Superadmin\SetingController::class);

     // manage question route here 
     Route::resource('/technician_account', App\Http\Controllers\Superadmin\TechnicianAcountController::class);
     Route::post('/technician_account_status', [App\Http\Controllers\Superadmin\TechnicianAcountController::class, 'TechnicianAcountStatus'])->name('technician_account.status');

     Route::resource('/problem', App\Http\Controllers\Superadmin\ProblemController::class);


});