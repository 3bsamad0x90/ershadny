<?php

use App\Http\Controllers\admin\AdminPanelController;
use App\Http\Controllers\admin\AppointemntController;
use App\Http\Controllers\admin\SpecializationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DepartmentController;


route::group(['prefix'=>'AdminPanel'],function(){
    Route::get('/', [AdminPanelController::class, 'index'])->name('admin.index');
    Route::get('/appointemnts', [AppointemntController::class, 'index'])->name('admin.appointemnts');
   
    //specializations التخصصات
    Route::group(['prefix'=>'specializations'],function(){
        Route::get('/', [SpecializationController::class, 'index'])->name('admin.specializations');
        Route::get('/create', [SpecializationController::class, 'create'])->name('admin.specializations.create');
        Route::post('/store', [SpecializationController::class, 'store'])->name('admin.specializations.store');
        Route::get('/edit/{id}', [SpecializationController::class, 'edit'])->name('admin.specializations.edit');
        Route::post('/update/{id}', [SpecializationController::class, 'update'])->name('admin.specializations.update');
        Route::delete('/delete/{id}', [SpecializationController::class, 'destroy'])->name('admin.specializations.delete');
    });

    //departments الاقسام
    Route::group(['prefix'=>'departments'],function(){
        Route::get('/', [DepartmentController::class, 'index'])->name('admin.departments');
        Route::get('/create', [DepartmentController::class, 'create'])->name('admin.departments.create');
        Route::post('/store', [DepartmentController::class, 'store'])->name('admin.departments.store');
        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('admin.departments.edit');
        Route::post('/update/{id}', [DepartmentController::class, 'update'])->name('admin.departments.update');
        Route::delete('/delete/{id}', [DepartmentController::class, 'destroy'])->name('admin.departments.delete');
    });

});





?>
