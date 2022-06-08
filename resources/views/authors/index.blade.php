@component('layouts.guest')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <a href="{{ route('authors.create') }}" class="btn btn-primary">
                    Добавить
                </a>
            </div>
            <div class="row">
                <table>
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
