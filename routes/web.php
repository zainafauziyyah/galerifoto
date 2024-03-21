<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CreatefotoController;

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

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/photo', function () {
    return view('photo');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'authenticating']);
Route::post('register', [AuthController::class, 'registerProcess']);

Route::middleware('auth')->group(function(){
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('create', [CreatefotoController::class, 'index'])->name('pages.createfoto');
Route::get('home', [HomeController::class, 'index'])->name('home');
// foto
Route::get('/photo', [PhotoController::class, 'index'])->name('foto');

Route::post('fotoupload', [FotoController::class, 'upload'])->name('foto.upload');


});

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


