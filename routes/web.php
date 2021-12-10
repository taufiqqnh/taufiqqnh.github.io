<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Visitor\IndexController;
use App\Http\Controllers\Admin\Section1Controller;
use App\Http\Controllers\Admin\Section2Controller;
use App\Http\Controllers\Admin\Section3Controller;
use App\Http\Controllers\Admin\Section4Controller;
use App\Http\Controllers\Admin\Section5Controller;


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

// ADMIN
Route::resource('/blog', PostsController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/section1', Section1Controller::class);
Route::resource('/section2', Section2Controller::class);
Route::resource('/section3', Section3Controller::class);
Route::resource('/section4', Section4Controller::class);
Route::resource('/section5', Section5Controller::class);
// ADMIN
Auth::routes();

// VISITOR

Route::get('/', [IndexController::class, 'index'])->name('home');;
// VISITOR

Route::get('/dashboard', function() {
    return view('admin.dashboard');
});