<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Jobs\AfterCreateAuthorJob;

class AuthorController extends BaseController
{
    public function index()
    {
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
            'author_fio' => 'required|min:5|max:255'
        ];
        $validatedData = $this->validate($request, $rules);
        $validatedData = $request->all();
        $item = new Author();
        $item->author_is_deleted = 0;
        $item->timestamps = false;
        $result = $item->fill($validatedData)->save();
        if($result) {
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
        //
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
            return 'ok';
        }
    }
}
