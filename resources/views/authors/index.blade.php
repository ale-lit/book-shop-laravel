@component('layouts.guest')

<style>
    .content__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }

    .add-button {
        background: black;
        cursor: pointer;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: normal;
        transition: all .3s ease-in-out;
    }
    .add-button:hover {
        opacity: .7;
    }

    .table {
        width: 100%;
        margin: 25px 0;
    }
    .table th {
        text-align: left;
    }
    .table th:last-child {
        text-align: right;
    }
    .table td:last-child {
        text-align: right;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="content__header">
                Все авторы
                <a href="{{ route('authors.create') }}" class="add-button">
                    Добавить
                </a>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> ФИО </th>
                            <th> Действия </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>
                                    {{ $item->author_id }}
                                </td>
                                <td>
                                    {{ $item->author_fio }}
                                </td>
                                <td>
                                    <a href="{{ route('authors.edit', $item->author_id) }}" class="btn btn-success">
                                        Редактировать
                                    </a>
                                    <button class="btn btn-danger" onclick="remove('authors', {{ $item->author_id }})">
                                        Удалить
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                @if ($items->total() > $items->count())
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{ $items->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endcomponent
