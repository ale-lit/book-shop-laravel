<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Author\AuthorController;

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
    return view('index');
})->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::group(['namespace' => 'Author', 'prefix' => ''], function () {
//     Route::resource('authors', 'AuthorController')->names('authors');
// });
Route::resource('authors', AuthorController::class);

Route::group(['namespace' => 'Book', 'prefix' => ''], function () {
    Route::resource('books', 'BookController')->names('books');
});

require __DIR__.'/auth.php';
