<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Author\AuthorController;
use App\Http\Controllers\Book\BookController;

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
})->name('main.index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Route::group(['namespace' => 'Author', 'prefix' => ''], function () {
//     Route::resource('authors', 'AuthorController')->names('authors');
// });


// Route::middleware('auth')->group(function() {

// })




// Route::resource('authors', AuthorController::class);

Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/create', [AuthorController::class, 'create'])->middleware('auth')->name('authors.create');
Route::post('authors', [AuthorController::class, 'store'])->middleware('auth')->name('authors.store');
// Route::get('authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
// Route::delete('authors/{author}', [AuthorController::class, 'destroy'])->middleware('auth')->name('authors.destroy');






// Route::group(['namespace' => 'Book', 'prefix' => ''], function () {
//     Route::resource('books', 'BookController')->names('books');
// });

// Route::resource('books', BookController::class);

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books', [BookController::class, 'store'])->name('books.store');
// Route::get('books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/{book}', [BookController::class, 'update'])->name('books.update');
// Route::delete('books/{book}', [BookController::class, 'destroy'])->middleware('auth')->name('books.destroy');

require __DIR__.'/auth.php';
