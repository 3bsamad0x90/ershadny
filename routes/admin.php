<?php

use App\Http\Controllers\admin\AdminPanelController;
use App\Http\Controllers\admin\AppointemntController;
use App\Http\Controllers\admin\SpecializationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DepartmentController;


route::group(['prefix'=>'AdminPanel'],function(){
    Route::get('/', [AdminPanelController::class, 'index'])->name('admin.index');
    Route::get('/appointemnts', [AppointemntController::class, 'index'])->name('admin.appointemnts');
    Route::get('/departments', [DepartmentController::class, 'index'])->name('admin.departments');

    //specializations التخصصات
    Route::group(['prefix'=>'specializations'],function(){
        Route::get('/', [SpecializationController::class, 'index'])->name('admin.specializations');
        Route::get('/create', [SpecializationController::class, 'create'])->name('admin.specializations.create');
        Route::post('/store', [SpecializationController::class, 'store'])->name('admin.specializations.store');
        Route::get('/edit/{id}', [SpecializationController::class, 'edit'])->name('admin.specializations.edit');
        Route::post('/update/{id}', [SpecializationController::class, 'update'])->name('admin.specializations.update');
        Route::delete('/delete/{id}', [SpecializationController::class, 'destroy'])->name('admin.specializations.delete');
    });


});





?>
