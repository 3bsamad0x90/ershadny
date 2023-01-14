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
    Route::get('/specializations', [SpecializationController::class, 'index'])->name('admin.specializations');
});





?>
