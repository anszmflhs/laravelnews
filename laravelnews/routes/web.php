<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReRegistrationController;
use App\Models\Category;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/daftar', [ReRegistrationController::class, 'daftar']);
Route::post('/register', [ReRegistrationController::class, 'register'])->name('register');

Route::get('/masuk', [PostController::class, 'masuk']);

Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
        //Kalo semisal menggunakan load itu namanya eager loading untuk meringankan query supaya tidak lag dari N + 1 Problems
    ]);
});

// Route::get('/dashboard', function()
// {
//     return view('dashboard.index');
// });

Route::get('/dashboard',[DashboardPostController::class, 'index']);
// auth agar user tidak bisa masuk jika belum login
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class);
