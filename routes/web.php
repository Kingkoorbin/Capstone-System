<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/SSSList', function () {
    return view('SSSList.index');
})->middleware(['auth', 'verified'])->name('SSSList.index');

Route::get('/201Files', function () {
    return view('201Files.index2');
})->middleware(['auth', 'verified'])->name('201Files.index2');

Route::get('/201Files/show', function () {
    return view('201Files.show');
})->middleware(['auth', 'verified'])->name('201Files-show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/show-modal', 'ModalController@showModal');
require __DIR__.'/auth.php';
