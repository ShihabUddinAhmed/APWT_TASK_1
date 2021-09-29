<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/page/index/landing page', [PageController::class, 'pageIndex'])->name('home');
Route::get('/product/service', [PageController::class, 'pageService'])->name('service');
Route::get('/our teams', [PageController::class, 'pageTeams'])->name('teams');
Route::get('/about us', [PageController::class, 'pageAbout'])->name('aboutus');
Route::get('/contact us', [PageController::class, 'pageContact'])->name('contact');
