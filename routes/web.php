<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CollaborationsController;
use App\Http\Controllers\FinancialSustainabilityController;
use App\Http\Controllers\MissionSustainabilityController;
use App\Http\Controllers\ProgramSustainabilityController;
use App\Http\Controllers\UserController;
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
    return view('HOME');
});





Route::group(['prefix' => 'admins'], function() {

    Route::get('/', [AdminsController::class, 'dashboard'])->name('admindash');

    Route::get('/forms', [AdminsController::class, 'dashboardforms'])->name('adminforms');

    Route::get('/blank', [AdminsController::class, 'blankpage'])->name('blankpage');

    Route::get('/table', [AdminsController::class, 'tablepage'])->name('tablepage');
}
);




Route::group(['prefix' => 'users'], function() {

    Route::get('/', [UsersDashController::class, 'dashboard'])->name('dash');

    Route::get('/forms', [UsersDashController::class, 'userforms'])->name('useradminforms');

    Route::get('/blank', [UsersDashController::class, 'blankpage'])->name('userblankpage');

    Route::get('/table', [UsersDashController::class, 'tablepage'])->name('usertablepage');

    //******* financial sustainability *******//
    //index page

    Route::get('/financial_sustainability', [FinancialSustainabilityController::class, 'index'])->name('financialSustainabilityIndex');

    //income diversification form

    Route::get('/forms/income_diversification', [FinancialSustainabilityController::class, 'incomediversificationform'])->name('incomeDiversificationForm');

    //Financial Management

    Route::get('/forms/finance_management', [FinancialSustainabilityController::class, 'financeManagementForm'])->name('financeManagementForm');



    //*****mission sustainability ******//
    //index page

    Route::get('/mission_sustainability', [MissionSustainabilityController::class, 'index'])->name('missionSustainabilityIndex');

    //Bible translation

    Route::get('/forms/bible-translation', [MissionSustainabilityController::class, 'bibleTranslation'])->name('bibleTranslationForm');

    //Bible publishing and Distribution

    Route::get('/forms/bible-publishing-and-translation', [MissionSustainabilityController::class, 'biblePublishingAndDistribution'])->name('biblePublishingAndDistributionForm');

    //Scripture Engagement

    Route::get('/forms/scripture_engagement', [MissionSustainabilityController::class, 'scriptureEngagement'])->name('scriptureEngagementForm');


    //*****collaborations ******//
    //index page
    Route::get('/collaborations', [CollaborationsController::class, 'index'])->name('collaborationsIndex');

    //Membership and partnerships

    Route::get('/forms/membership_and_partnerships', [CollaborationsController::class, 'membershipAndPartnership'])->name('membershipAndPartnership');

    //Membership and partnerships

    Route::get('/forms/publicity_and_communication', [CollaborationsController::class, 'publicityAndCommunication'])->name('publicityAndCommunication');

    //*****Program sustainability ******//
    //governance form
    Route::get('/forms/governance', [ProgramSustainabilityController::class, 'governanceForm'])->name('governanceForm');

    //leadership form
    Route::get('/forms/leadership', [ProgramSustainabilityController::class, 'leadershipForm'])->name('leadershipForm');


}
);




//**** Authentication ****//
Route::group(['prefix'=>'auth'], function(){

    //registration form
    Route::get('/register', [UserController::class, 'register'])->name('register');

    //store new user data

    Route::post('/register', [UserController::class, 'store'])->name('registerUser');

    //login form

    Route::get('/login', [UserController::class, 'login'])->name('login');

    //authenticate user

    Route::post('/authenticate_user', [UserController::class, 'authenticate'])->name('authenticateUser');

    //logout user

    Route::post('/logout', [UserController::class, 'logout'])->name('logoutUser');


});
