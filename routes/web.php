<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\UsersDashController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admins'], function() {

    Route::get('/', [AdminsController::class, 'dashboard'])->name('admindash');

    Route::get('/forms', [AdminsController::class, 'dashboardforms'])->name('adminforms');

    Route::get('/blank', [AdminsController::class, 'blankpage'])->name('blankpage');

    Route::get('table', [AdminsController::class, 'tablepage'])->name('tablepage');
}
);




Route::group(['prefix' => 'users'], function() {

    Route::get('/', [UsersDashController::class, 'dashboard'])->name('dash');

    Route::get('/forms', [UsersDashController::class, 'userforms'])->name('useradminforms');

    Route::get('/blank', [UsersDashController::class, 'blankpage'])->name('userblankpage');

    Route::get('/table', [UsersDashController::class, 'tablepage'])->name('tablepage');
}
);
