@component('layouts.guest')

<style>
    .content__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }

    .butt {
        font-weight: normal;
        transition: all .3s ease-in-out;
        border-radius: 5px;
        padding: 5px;
        color: #fff;
        background: #000;
        cursor: pointer;
        display: inline-block;
    }
    .butt:hover {
        opacity: .7;
    }

    .add-button {
        padding: 5px 10px;
    }
    .del-button {
        background: #df0000;
    }

    .table {
        width: 100%;
        margin: 25px 0;
    }
    .table th {
        text-align: left;
        padding: 0 5px;
    }
    .table td {
        padding: 2px 5px;
        text-align: left;
    }
    .table th:last-child {
        text-align: right;
    }
    .table td:last-child {
        text-align: right;
    }

    .actions-buttons {
        display: flex;
        gap: 5px;
        justify-content: flex-end;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="content__header">
                Все книги
                <a href="{{ route('books.create') }}" class="butt add-button">
                    Добавить
                </a>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Название </th>
                            <th> Авторы </th>
                            <th> Год </th>
                            <th> Жанр </th>
                            <th> Издатель </th>
                            <th> Цена </th>
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
                                    {{ $item->authors->map(function ($author) { return $author->author_fio; })->join(', ') }}
                                </td>
                                <td>
                                    {{ $item->book_year }}
                                </td>
                                <td>
                                    {{ $item->genre ? $item->genre->genre_name : "" }}
                                </td>
                                <td>
                                    {{ $item->publisher ? $item->publisher->publisher_name : "" }}
                                </td>
                                <td>
                                    {{ $item->book_price }}₽
                                </td>
                                <td class="actions-buttons">
                                    <a href="{{ route('books.edit', $item->book_id) }}" class="butt edit-button" title="Редактировать">
                                        <svg width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#fff;}</style></defs><title/><g data-name="Layer 18" id="Layer_18"><path class="cls-1" d="M2,31a1,1,0,0,1-1-1.11l.9-8.17a1,1,0,0,1,.29-.6L21.27,2.05a3.56,3.56,0,0,1,5.05,0L30,5.68a3.56,3.56,0,0,1,0,5.05L10.88,29.8a1,1,0,0,1-.6.29L2.11,31Zm8.17-1.91h0ZM3.86,22.28l-.73,6.59,6.59-.73L28.54,9.31a1.58,1.58,0,0,0,0-2.22L24.91,3.46a1.58,1.58,0,0,0-2.22,0Z"/><path class="cls-1" d="M26.52,13.74a1,1,0,0,1-.7-.29L18.55,6.18A1,1,0,0,1,20,4.77L27.23,12a1,1,0,0,1,0,1.41A1,1,0,0,1,26.52,13.74Z"/><rect class="cls-1" height="2" transform="translate(-7.91 15.47) rotate(-45)" width="12.84" x="8.29" y="16.28"/></g></svg>
                                    </a>
                                    <button onclick="remove('books', {{ $item->book_id }})" class="butt del-button" title="Удалить">
                                        <svg width="20" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="  M25,10H7v17c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V10z" fill="none" id="XMLID_129_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M20,7h-8V5c0-1.105,0.895-2,2-2h4c1.105,0,2,0.895,2,2V7z" fill="none" id="XMLID_145_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M28,10H4V8c0-0.552,0.448-1,1-1h22c0.552,0,1,0.448,1,1V10z" fill="none" id="XMLID_146_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" id="XMLID_148_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="16" x2="16" y1="15" y2="24"/><line fill="none" id="XMLID_147_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="12" x2="12" y1="15" y2="24"/><line fill="none" id="XMLID_149_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="20" x2="20" y1="15" y2="24"/></svg>
                                    </button>
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
