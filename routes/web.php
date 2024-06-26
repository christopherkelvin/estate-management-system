<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\ProfileController;

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


Route::get('/',[pagescontroller::class,'home']);

Route::get('/sell',[pagescontroller::class,'sell'])->middleware('auth');
Route::post('/sell',[pagescontroller::class,'store'])->middleware('auth');
Route::get('/help',[pagescontroller::class,'help']);

Route::get('/buy',[pagescontroller::class,'buy']);
Route::get('/buy/{id}',[pagescontroller::class,'show']);


Route::put('/buy/{estate}',[pagescontroller::class,'update'])->middleware('auth');
Route::get('/buy/{estate}/edit',[pagescontroller::class,'edit'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
