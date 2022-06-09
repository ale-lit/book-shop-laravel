@component('layouts.guest')

<form method="POST" action="{{ empty($data->attributes) ? route('authors.store') : route('authors.update', $data->author_id) }}">
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

    <!-- Author_name -->
    <div>
        <x-label for="name" :value="__('ФИО')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="author_fio" :value="old('author_fio') ?? $data->author_fio" required autofocus />
    </div>

    <div class="flex items-center justify-end mt-4">

        <x-button class="ml-3">
            {{ empty($data->attributes) ? __('Добавить') : __('Изменить') }}
        </x-button>
    </div>
</form>

@endcomponent
