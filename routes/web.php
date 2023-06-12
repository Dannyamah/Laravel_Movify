<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('movies', [HomeController::class, 'movies'])->name('movies');


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/all-movies', [MovieController::class, 'all_movies'])->name('movies.all');
    Route::get('/add-movies', [MovieController::class, 'add_movies'])->name('movies.add');
    Route::post('/add-movies', [MovieController::class, 'save_movies'])->name('movies.save');
});

require __DIR__.'/auth.php';
