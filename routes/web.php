<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home', [
        "judul" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "judul" => "About",
        "nama" => "Muhammad Meftah Mafazy",
        "asal" => "Banjarbaru"
    ]);
});

Route::get('/fasilitas', [PostController::class, 'index']);

// Single Post
Route::get('/fasilitas/{id}', [PostController::class, 'show']);
