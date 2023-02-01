<?php

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardReviewController;
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

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/categories', [BookController::class, 'categories'])->middleware('auth');

Route::get('/about', [HomeController::class, 'about'])->middleware('auth');

Route::get('/dashboard', [HomeController::class, 'dashboard']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/categories/{category:slugs}', [BookController::class, 'category'])->middleware('auth');

Route::get('/{book:slugs}', [HomeController::class, 'infobook'])->middleware('auth');

Route::get('/authors/{user:name}', function(User $user){
    return view('authors', [
        'title' => 'User Books',
        'books' => $user->books,
        'author' => $user->name,
    ]);
});

Route::resource('/dashboard/review', DashboardReviewController::class)->except([
    'show','edit', 'update'])->middleware('auth');

Route::get('/dashboard/review/{book:slugs}', [DashboardReviewController::class, 'show'])->middleware('auth');

Route::get('/dashboard/review/{book:slugs}/edit', [DashboardReviewController::class, 'edit'])->middleware('auth');

Route::put('/dashboard/review/{book:id}', [DashboardReviewController::class, 'update'])->middleware('auth');


