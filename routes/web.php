<?php

use App\Http\Controllers\backend\ComicsController;

use App\Http\Controllers\backend\PastaController;
use App\Http\Controllers\backend\AlbumController;
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

// Questa scritta qui:
Route::resource('albums', AlbumController::class);
/*
    SI TRADUCE IN:
    Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
    Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
    Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
    Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('albums.show');
    Route::put('/albums/{album}', [AlbumController::class, 'update'])->name('albums.update');
    Route::get('/albums/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
    Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');

*/


