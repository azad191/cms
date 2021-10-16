<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Bacakend\MenuController;

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
    return view('backend.dashboard');
});

Route::get('cats', [CategoryController::class, 'index']);
Route::get('menu', [MenuController::class, 'index'])->name('menu');
Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');

