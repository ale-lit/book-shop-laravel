@component('layouts.basic')
    <!-- Validation Errors -->
    <x-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST"
        action="{{ empty($data->author_id) ? route('authors.store') : route('authors.update', $data->author_id) }}">
        @csrf

        @if (!empty($data->author_id))
            @method('PATCH')
        @endif

        <!-- Author_name -->
        <div>
            <x-label for="name" :value="__('ФИО')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="author_fio" :value="old('author_fio') ?? $data->author_fio" required
                autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-3">
                {{ empty($data->author_id) ? __('Добавить') : __('Изменить') }}
            </x-button>
        </div>
    </form>
@endcomponent
