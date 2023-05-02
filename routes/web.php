<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrabajosController;
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

Route::resource('trabajos',TrabajosController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/characters', function () {
    return view('characters');
});

Route::get('/browse-job', function () {
    return view('browse-job');
});

Route::get('/company-detail', function () {
    return view('company-detail');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/companies', function () {
    return view('companies');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
