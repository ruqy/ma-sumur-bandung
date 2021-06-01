<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
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
})->name('/');

Route::match(['POST', 'GET'], '/php', function () {
    return view('tutorial');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/agenda', function () {
    return view('agenda');
})->middleware(['auth'])->name('agenda');

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/view/{page}', [PageController::class, 'index']);
Route::resource('guru', GuruController::class);

require __DIR__ . '/auth.php';