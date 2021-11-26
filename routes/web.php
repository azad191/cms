<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\logoCongtroller;
use App\Http\Controllers\Backend\loginController;
use App\Http\Controllers\NominationController;
use App\Http\Controllers\Backend\userController;
use App\Http\Controllers\Backend\VoterController;
use App\Http\Controllers\Backend\CandidateController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ElectionController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\BallotSettingController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\CandidateNominationController;

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


Route::get('/admin/login', function () {
    //  return view('welcome');
    return view('login');
})->name('logins');

Route::get('/admin/register', function () {
    //  return view('welcome');
    return view('register');
});
Route::post('admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('admin/election/dashboard/{id}/{slug}', [NominationController::class, 'create']);
Route::post('nomination/register/{id}/{slug}', [NominationController::class, 'store'])->name('nomination.register');
Route::group(['middleware' => 'auth'], function(){

    Route::get('cats', [CategoryController::class, 'index']);
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/menu/create/main', [MenuController::class, 'mainMenuStore']);
    Route::prefix('slider')->name('slider.')->group(function(){
        Route::get('/all', [sliderController::class, 'index'])->name('index');
    });
    Route::prefix('logo')->name('logo.')->group(function(){
        Route::get('/all', [logoCongtroller::class, 'index'])->name('index');
    });

    Route::get('/roles', [userController::class, 'roles']);

    //***************** Admin *********************
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::prefix('admin')->name('admin.')->group(function(){

        Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
        Route::get('/election', [ElectionController::class, 'create'])->name('election.create');
        Route::post('/election/store/{id}', [ElectionController::class, 'store'])->name('election.store');
        Route::get('/election/dashboard/{id}', [ElectionController::class, 'index'])->name('election.dashboard');
        //ballot setting
        Route::get('/election/ballot/{id}', [BallotSettingController::class, 'index'])->name('election.ballot.setting');

        Route::get('/election/position/create/{id}', [PositionController::class, 'create'])->name('election.ballot.position');
        Route::post('/election/position/store/{id}', [PositionController::class, 'store'])->name('election.position.store');



    });
    //***************** User *********************
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('/all', [userController::class, 'index'])->name('index');
        Route::get('/create', [userController::class, 'create'])->name('create');
        Route::post('/store', [userController::class, 'store'])->name('store');
        Route::get('/test', [userController::class, 'testData']);
    });
    //***************** Employee *********************
    Route::prefix('employee')->name('employee.')->group(function(){
        Route::get('/all', [EmployeeController::class, 'index'])->name('index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('store');


    });

    //***************** Voter *********************
    Route::prefix('voter')->name('voter.')->group(function(){
        Route::get('/pending', [VoterController::class, 'index'])->name('index');
        Route::get('/approve', [VoterController::class, 'approved'])->name('approved');

    });
    //***************** candidate *********************
    Route::prefix('candidate')->name('candidate.')->group(function(){
        Route::get('/pending', [CandidateController::class, 'index'])->name('index');
        Route::get('/approve', [CandidateController::class, 'approved'])->name('approved');


    });

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
