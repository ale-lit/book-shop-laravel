<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Publisher;

class BookController extends BaseController
{
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
        $items = Book::where('book_is_deleted', 0)->paginate(10);

        return view('books.index', compact('items'));
    }

    public function create()
    {
        $data = new Book();
        $authors = Author::where('author_is_deleted', 0)->get();
        $publishers = Publisher::all();
        $genres = Genre::all();
        return view('books.edit', compact('data', 'authors', 'publishers', 'genres'));
    }

    public function store(Request $request)
    {
        $rules = [
            'book_name' => ['required', 'string', 'min:3', 'max:255'],
            'book_genre_id' => ['nullable', 'integer', 'digits_between:1,10'],
            'book_price' => ['nullable', 'numeric', 'min:1', 'max:999999'],
            'book_year' => ['nullable', 'integer', 'digits:4'],
            'book_publisher_id' => ['nullable', 'integer', 'digits_between:1,10'],
        ];
        $validatedData = $this->validate($request, $rules);
        $validatedData = $request->all();
        $item = new Book();
        $item->book_is_deleted = 0;
        $item->book_avg_mark = 0;
        $item->timestamps = false;
        $result = $item->fill($validatedData)->save();
        $item->authors()->sync($validatedData['authors']);
        if ($result) {
            alert(__('Добавлено!'));

            return redirect()
                ->route('books.index');
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }

    public function edit($id)
    {
        $data = Book::with(['authors', 'publisher'])
            ->findOrFail($id);
        $authors = Author::where('author_is_deleted', 0)->get();
        $publishers = Publisher::all();
        $genres = Genre::all();
        return view('books.edit', compact('data', 'authors', 'publishers', 'genres'));
    }

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

        if ($result) {
            alert(__('Сохранено!'));

            return redirect()
                ->route('books.index');
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }

    public function destroy($id)
    {
        $data = array(
            'book_is_deleted' => 1
        );
        $item = Book::findOrFail($id);
        $item->timestamps = false;
        $result = $item->fill($data)->save();
        if ($result) {
            alert(__('Удалено!'));
            return 'ok';
        }
    }
}
