<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminPanelController;


route::group(['prefix'=>'AdminPanel'],function(){
    Route::get('/', [AdminPanelController::class, 'index'])->name('admin.index');
});





?>
