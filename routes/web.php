<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\logoCongtroller;
use App\Http\Controllers\jobListController;
use App\Http\Controllers\freelancerListController;
use App\Http\Controllers\Backend\userController;
use App\Http\Controllers\userRegistrationController;
use App\Http\Controllers\FreelancerProfileController;
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
    //  return view('welcome');
    return view('homepage');
    // return view('frontend.pages.registration');
});
Route::get('job/list', [jobListController::class, 'index'])->name('job.list');
Route::get('job/details', [jobListController::class, 'details'])->name('job.details');

//***************************** Freelancer   ****************************
Route::get('freelancer/list', [freelancerListController::class, 'index'])->name('freelancer.list');
Route::get('freelancer/details/{id}', [freelancerListController::class, 'details'])->name('freelancer.details');
Route::post('freelancer/filter', [freelancerListController::class, 'filter'])->name('freelancer.filter');

Route::get('freelancer/profile', [FreelancerProfileController::class, 'index'])->name('freelancer.profile');

Route::post('freelancer/update/{id}', [FreelancerProfileController::class, 'update'])->name('freelancer.update');

Route::post('/freelancer/skills', [FreelancerProfileController::class, 'skills']);
Route::get('/freelancer/all/skill', [FreelancerProfileController::class, 'allSkills']);
Route::get('/freelancer/skill/{id}', [FreelancerProfileController::class, 'SkillsById']);

Route::get('user/registration', [userRegistrationController::class, 'create'])->name('user.reg');
Route::post('user/registration', [userRegistrationController::class, 'store'])->name('user.store');







//***************************** start backend side *****************************

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
Route::prefix('user')->name('user.')->group(function(){
    Route::get('/all', [userController::class, 'index'])->name('index');
    Route::post('/store', [userController::class, 'store']);
    Route::get('/test', [userController::class, 'testData']);
});
Route::get('/roles', [userController::class, 'roles']);

});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
