@component('layouts.guest')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <a href="{{ route('books.create') }}" class="btn btn-primary">
                    Добавить
                </a>
            </div>
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Название </th>
                            <th> Жанр </th>
                            <th> Цена </th>
                            <th> Издатель </th>
                            <th> Авторы </th>
                            <th> Действия </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>
                                    {{ $item->book_id }}
                                </td>
                                <td>
                                    {{ $item->book_name }}
                                </td>
                                <td>
                                    {{ $item->book_genre_id }}
                                </td>
                                <td>
                                    {{ $item->book_price }}
                                </td>
                                <td>
                                    {{ $item->publisher ? $item->publisher->publisher_name : "" }}
                                </td>
                                <td>
                                    {{ $item->authors->map(function ($author) { return $author->author_fio; })->join(', ') }}
                                </td>
                                <td>
                                    {{ $item->book_year }}
                                </td>
                                <td>
                                    <a href="{{ route('books.edit', $item->book_id) }}" class="btn btn-success">
                                        Редактировать
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endcomponent