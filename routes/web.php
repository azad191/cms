<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\jobListController;
use App\Http\Controllers\freelancerListController;
use App\Http\Controllers\freelancerDashboardController;

use App\Http\Controllers\userRegistrationController;
use App\Http\Controllers\FreelancerProfileController;
use App\Http\Controllers\BuyerDashboardController;
use App\Http\Controllers\Backend\userController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\logoCongtroller;
use App\Http\Controllers\Backend\JobProposalController;
use App\Http\Controllers\Backend\WishlistController;


>>>>>>> 8b71f0b5417b4f2e43fb2edfdbb8267735cb2016

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
<<<<<<< HEAD

Route::get('/', function () {
  //  return view('welcome');
    return view('backend.dashboard');
});
=======
Route::get('/', function () {
    //  return view('welcome');
    return view('homepage');
    // return view('frontend.pages.registration');
});



Route::get('job/list', [jobListController::class, 'index'])->name('job.list');
Route::get('job/details/{id}', [jobListController::class, 'details'])->name('job.details');
Route::get('job/file/download/{id}', [jobListController::class, 'download'])->name('job.file.download');
Route::post('job/filter', [jobListController::class, 'jobFilter'])->name('job.filter');
Route::get('job/proposal/{id}', [jobListController::class, 'proposal'])->name('job.proposal');
Route::get('/buyer/profile/{id}', [BuyerDashboardController::class, 'profile'])->name('buyer_profile');
Route::get('/buyer/dashboardd', [BuyerDashboardController::class, 'dashboard1']);


Route::get('freelancer/list', [freelancerListController::class, 'index'])->name('freelancer.list');
Route::post('freelancer/filter', [freelancerListController::class, 'filter'])->name('freelancer.filter');

Route::get('freelancer/details/{id}', [freelancerListController::class, 'details'])->name('freelancer.details');


Route::get('freelancer/profile', [FreelancerProfileController::class, 'index'])->name('freelancer.profile');

//wish list add both freelancer and buyer
Route::get('wish/list/{id}/{userId}/{type}', [WishlistController::class, 'wishList']);

 Route::group(['middleware' => 'auth'], function(){
//***************************** Start Freelancer   ****************************

     Route::group(['middleware' => 'freelancer'], function(){
         Route::prefix('freelancer')->name('freelancer.')->group(function(){

//             Route::get('/details/{id}', [freelancerListController::class, 'details'])->name('details');
//
//
//             Route::get('/profile', [FreelancerProfileController::class, 'index'])->name('profile');

             Route::post('/update/{id}', [FreelancerProfileController::class, 'update'])->name('update');

             Route::post('/skills', [FreelancerProfileController::class, 'skills']);
             Route::get('/all/skill', [FreelancerProfileController::class, 'allSkills']);
             Route::get('/skill/{id}', [FreelancerProfileController::class, 'SkillsById']);

             //freelancer dashboard
             Route::get('/dashboard', [freelancerDashboardController::class, 'dashboard'])->name('dashboard');
             Route::get('/send/proposal', [freelancerDashboardController::class, 'sendProposal'])->name('proposal');
             //job proposal
             Route::post('/job/send/proposal/{id}/{jobId}', [JobProposalController::class, 'sendProposal'])->name('send.proposal');

             //freelancer education
             Route::post('/education/{id}', [FreelancerProfileController::class, 'education'])->name('education');
         });
     });


//***************************** End Freelancer   ****************************
});

//***************************** Start Buyer   ****************************
Route::group(['middleware' => 'auth'], function(){

    Route::group(['prefix'=>'buyer', 'as' => 'buyer.', 'middleware' => 'buyer'], function(){
            Route::get('/dashboard', [BuyerDashboardController::class, 'dashboard'])->name('dashboard');
            Route::get('/profile/view/{id}', [BuyerDashboardController::class, 'profileView'])->name('profile.view');
            Route::post('/dashboard/{id}', [BuyerDashboardController::class, 'update'])->name('profile.update');
            Route::get('/job/post', [BuyerDashboardController::class, 'jobPost'])->name('job.post');
            Route::post('/job/post/{id}', [BuyerDashboardController::class, 'jobPostStore'])->name('job.store');

            //buyer dashboard
            Route::get('/all/job/post/{id}', [BuyerDashboardController::class, 'showJobPost'])->name('all.job.post');
            Route::get('/all/applied/job/{jobId}', [BuyerDashboardController::class, 'appliedJob'])->name('all.applied.job');

            //wish list
            Route::get('show/wishlist/{id}', [WishlistController::class, 'showWishList'])->name('show.wishlist');

            //freelancer proposal
            Route::get('view/proposal/{id}', [JobProposalController::class, 'viewProposal'])->name('proposal.view');

    });

});


//***************************** End buyer   ****************************


Route::get('user/registration', [userRegistrationController::class, 'create'])->name('user.reg');
Route::post('user/registration', [userRegistrationController::class, 'store'])->name('user.store');


//***************************** start backend side *****************************


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::group(['middleware' => 'superAdmin'], function(){
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



});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 8b71f0b5417b4f2e43fb2edfdbb8267735cb2016
