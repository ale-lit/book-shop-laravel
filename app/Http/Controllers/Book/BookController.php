<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;

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
        $items = Book::where('book_is_deleted', 0)
                    ->select($columns)
                    ->with(['publisher', 'authors', 'genre'])
                    ->get();

        return view('books.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Book();
        $authors = Author::all();
        return view('books.edit', compact('data', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = [
        //     'book_name' => 'required|min:5|max:255'
        // ];
        // $validatedData = $this->validate($request, $rules);
        $data = $request->all();
        $item = new Book();
        $item->book_is_deleted = 0;
        $item->book_avg_mark = 0;
        $item->timestamps = false;
        $result = $item->fill($data)->save();
        $item->authors()->sync($data['authors']);
        if($result) {
            return redirect()
                        ->route('books.index');
        } else {
            return back()
                        ->withErrors(['msg' => 'Ошибка сохранения'])
                        ->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Book::with(['authors', 'publisher'])
                    ->findOrFail($id);
        $authors = Author::where('author_is_deleted', 0)->get();
        $publishers = Publisher::all();
        return view('books.edit', compact('data', 'authors', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $rules = [
        //     'author_fio' => 'required|min:5|max:255'
        // ];
        // $validatedData = $this->validate($request, $rules);
        $data = $request->all();
        $item = Book::with(['authors', 'publisher'])
                    ->findOrFail($id);
        $item->timestamps = false;
        $result = $item->fill($data)->save();
        $item->authors()->sync($data['authors']);
        // $item->publisher()->sync($data['book_publisher']);
        if($result) {
            return redirect()
                        ->route('books.index');
        } else {
            return back()
                        ->withErrors(['msg' => 'Ошибка сохранения'])
                        ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = array(
            'book_is_deleted' => 1
        );
        $item = Book::findOrFail($id);
        $item->timestamps = false;
        $result = $item->fill($data)->save();
        if ($result) {
            return 'ok';
        }
    }
}
