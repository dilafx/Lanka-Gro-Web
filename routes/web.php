<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCropController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminResearchController;
use App\Http\Controllers\AdminTutorialController;

//home controller
Route::get('/',[HomeController::class,"index"])->name ('home');

//news controller
Route::get('/news',[NewsController::class,"index"])->name ('news');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home',[AdminController::class,'index'])->name('home');

//Admin news controller
route::get('/admin/Manage-News',[AdminNewsController::class,'index'])->name('news');

//Admin research controller
route::get('/admin/Manage-Research',[AdminResearchController::class,'index'])->name('research');


//Admin crop controller
route::get('/admin/Manage-Crop-Solution',[AdminCropController::class,'index'])->name('crop');

//Admin Event controller
route::get('/admin/Manage-Event',[AdminEventController::class,'index'])->name('event');

//Admin tutorial controller
route::get('/admin/Manage-Tutorial',[AdminTutorialController::class,'index'])->name('tutorial');
