<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = [
            'book_name',
            'book_id',
            'book_price',
            'book_year',
            'book_genre_id',
            'book_publisher_id'
        ];
        $items = Book::select($columns)
                    ->with(['publisher', 'authors'])
                    ->get();

        return view('books.index', compact('items'));
    }
}
