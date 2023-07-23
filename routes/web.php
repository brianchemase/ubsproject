<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;

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
