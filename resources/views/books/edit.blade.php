@component('layouts.basic')
    <style>
        .edit-form {
            text-align: left;
            padding: 0 10px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
    </style>

    <form method="POST"
        action="{{ empty($data->book_id) ? route('books.store') : route('books.update', $data->book_id) }}"
        class="edit-form">
        @csrf

        @if (!empty($data->book_id))
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

            <x-input id="book_name" class="block mt-1 w-full" type="text" name="book_name" :value="old('book_name') ?? $data->book_name" required
                autofocus />
        </div>


        <!-- Book_genre -->
        <div>
            <x-label for="book_genre" :value="__('Жанр')" />

            {{-- {{ dd($data->publisher->publisher_name, $data->publisher_name) }} --}}

            <select name="book_genre_id" id="book_genre">
                <option value=""></option>
                @foreach ($genres as $genre)
                    <option
                        value="{{ $genre->genre_id }}"
                        @if (!empty($data->genre->genre_name)) {{ $data->genre->genre_name == $genre->genre_name ? 'selected' : '' }} @endif
                    >
                        {{ $genre->genre_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Book_year -->
        <div>
            <x-label for="book_year" :value="__('Год')" />
            <x-input id="book_year" class="block mt-1 w-full" type="text" name="book_year" :value="old('book_year') ?? $data->book_year" required />
        </div>

        <!-- Book_publisher -->
        <div>
            <x-label for="book_publisher" :value="__('Издатель')" />

            <select name="book_publisher_id" id="book_publisher">
                <option value=""></option>
                @foreach ($publishers as $publisher)
                    <option
                        value="{{ $publisher->publisher_id }}"
                        @if (!empty($data->publisher->publisher_name)) {{ $data->publisher->publisher_name == $publisher->publisher_name ? 'selected' : '' }} @endif
                    >
                        {{ $publisher->publisher_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Book_price -->
        <div>
            <x-label for="book_price" :value="__('Цена')" />
            <x-input id="book_price" class="block mt-1 w-full" type="text" name="book_price" :value="old('book_price') ?? $data->book_price" required />
        </div>

        <!-- Book_authors -->
        <div>
            <x-label for="book_authors" :value="__('Авторы')" />
            <select name="authors[]" multiple id="book_authors">
                @foreach ($authors as $author)
                    <option value="{{ $author->author_id }}" {{ $data->authors->contains($author) ? 'selected' : '' }}>
                        {{ $author->author_fio }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-3">
                {{ empty($data->book_id) ? __('Добавить') : __('Изменить') }}
            </x-button>
        </div>
    </form>
@endcomponent
