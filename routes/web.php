<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LearningResourceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');
    
    Route::resource('services', ServiceController::class);
    Route::resource('services.resources', LearningResourceController::class)->except(['create'])->shallow();
    Route::get('/services/{service}/resources/type/{type}/create', [LearningResourceController::class, 'create'])->name('services.resources.create');

    /*
    Route::view('/system', 'system.index')->name('system.index');
    Route::view('/system/tournament', 'system.tournament')->name('system.tournament');
    Route::view('/system/audit', 'system.audit')->name('system.audit');

    Route::view('/test', 'pages.test')->name('pages.test');

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


require __DIR__.'/auth.php';
