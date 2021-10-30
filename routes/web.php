<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\logoCongtroller;
use App\Http\Controllers\Backend\loginController;
    use App\Http\Controllers\Backend\userController;

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

Route::group(['middleware' => 'auth'], function(){
Route::get('/', function () {
  //  return view('welcome');
    return view('backend.dashboard');
});

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
