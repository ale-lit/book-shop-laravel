<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Jobs\AfterCreateAuthorJob;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class AuthorController extends BaseController
{
    public function index()
    {

        // dd(Auth::check());

        $items = Author::where('author_is_deleted', 0)->paginate(10);
        return view('authors.index', compact('items'));
    }

    public function create()
    {
        $data = new Author();
        return view('authors.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $rules = [
            'author_fio' => ['required', 'string', 'min:5', 'max:255', 'unique:authors'],
        ];
        $validatedData = $this->validate($request, $rules);
        $validatedData = $request->all();
        $item = new Author();
        $item->author_is_deleted = 0;
        $item->timestamps = false;
        $result = $item->fill($validatedData)->save();
        if($result) {
            alert(__('Добавлено!'));

            $job = new AfterCreateAuthorJob($item);
            $this->dispatch($job);

            return redirect()
                        ->route('authors.index');
        } else {
            return back()
                        ->withErrors(['msg' => 'Ошибка сохранения'])
                        ->withInput();
        }
    }

    public function show($id)
    {
        $data = Author::findOrFail($id);
        return view('authors.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Author::findOrFail($id);
        return view('authors.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'author_fio' => 'required|min:5|max:255'
        ];
        $validatedData = $this->validate($request, $rules);

        $item = Author::find($id);
        $item->timestamps = false;
        if (empty($item)) {
            return back()
                        ->withErrors(['msg' => "Запись с id = $id не найдена"])
                        ->withInput();
        }
        $item->author_is_deleted = 0;
        $item->timestamps = false;
        $validatedData = $request->all();
        $result = $item->fill($validatedData)->save();
        if($result) {
            alert(__('Сохранено!'));

            return redirect()
                        ->route('authors.index');
        } else {
            return back()
                        ->withErrors(['msg' => 'Ошибка сохранения'])
                        ->withInput();
        }
    }

    public function destroy($id)
    {
        $data = array(
            'author_is_deleted' => 1
        );
        $item = Author::findOrFail($id);
        $item->timestamps = false;
        $result = $item->fill($data)->save();
        if ($result) {
            alert(__('Удалено!'));
            return 'ok';
        }
    }
}
