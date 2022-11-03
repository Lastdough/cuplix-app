<?php

use App\Http\Controllers\MoreDetailController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\NewReleaseController;
use App\Http\Controllers\TrendingController;
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
    return view('welcome');
})->name('welcome');;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('/trending', function(){
//     return view('trending-menu');
// })->name('trending');


Route::get('/trending', [TrendingController::class, 'index'])->name('trending');

Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/moviesdetail/{detailid}', [MoviesController::class, 'show'])->name('moviesdetail');

Route::get('/newrelease', [NewReleaseController::class, 'index'])->name('newrelease');




