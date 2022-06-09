@component('layouts.guest')

<form method="POST" action="{{ empty($data->attributes) ? route('books.store') : route('books.update', $data->book_id) }}">
    @csrf

    @if (!empty($data->attributes))
        @method('PATCH')
    @endif

    <div class="container">
        @if ($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismisss="alert" aria-label="close">
                            <span aria-hidden="true"> x </span>
                        </button>
                        {{ $errors->first() }}
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Book_name -->
    <div>
        <x-label for="book_name" :value="__('Название книги')" />

        <x-input id="book_name" class="block mt-1 w-full" type="text" name="book_name" :value="old('book_name') ?? $data->book_name" required autofocus />
    </div>

    <!-- Book_price -->
    <div>
        <x-label for="book_price" :value="__('Цена')" />

        <x-input id="book_price" class="block mt-1 w-full" type="text" name="book_price" :value="old('book_price') ?? $data->book_price" required />
    </div>

    <!-- Book_authors -->
    <div>
        <x-label for="book_authors" :value="__('Цена')" />

        <select name="authors[]" multiple id="book_authors">
            @foreach ($authors as $author)
                <option value="{{ $author->author_id }}">{{ $author->author_fio }}</option>
            @endforeach
        </select>
    </div>

    <div class="flex items-center justify-end mt-4">

        <x-button class="ml-3">
            {{ empty($data->attributes) ? __('Добавить') : __('Изменить') }}
        </x-button>
    </div>
</form>

@endcomponent
