<?php

use App\Http\Controllers\backend\ComicsController;

use App\Http\Controllers\backend\PastaController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\WelcomeController as WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('homePage');

Route::resource('pastas', PastaController::class );

Route::resource('comics', ComicsController::class );


