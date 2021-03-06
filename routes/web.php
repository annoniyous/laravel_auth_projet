<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Models\Avatar;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    $categories = Category::all();
    $images = Image::all();
    $avatars = Avatar::all();
    $users= User::all();
    return view('welcome', compact('categories','images','avatars','users'));
});

Route::resource('avatars', AvatarController::class);
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('images', ImageController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
