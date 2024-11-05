@extends('templates.auth')
@section('page.title', 'Страница регистрации')
@section('auth.content')

    <x-card>
        <x-card-header>
            <h4 class="m-0">
                Войти в административную панель
            </h4>
        </x-card-header>
        <div class="card-body">
            <x-form action="{{route('admin.store')}}" method="POST">
                <x-error-list />
                <div class="mb-3">
                    <x-label class="required">Имя</x-label>
                    <x-input type="name"  name="name" autofocus/>
                    <x-error name="name" />
                </div>
                <div class="mb-3">
                    <x-label required>Пароль</x-label>
                    <x-input type="password"  name="password"/>
                    <x-error name="password" />
                </div>
                <x-button type="submit">Войти</x-button>
            </x-form>
        </div>
    </x-card>

@endsection



