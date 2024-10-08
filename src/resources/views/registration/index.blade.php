@extends('templates.auth')
@section('page.title', 'Страница регистрации')
@section('auth.content')

    <x-card>
        <x-card-header>
            <h4 class="m-0">
                Регистрация
            </h4>
            <x-slot name="right">
                <a href="{{route('login')}}">
                    Логин
                </a>
            </x-slot>
        </x-card-header>
        <div class="card-body">
            <x-form action="{{route('registration.store')}}" method="POST">
                <x-error-list />
                <div class="mb-3">
                    <x-label class="required">Имя</x-label>
                    <x-input type="name"  name="name" autofocus/>
                    <x-error name="name" />
                </div>
                <div class="mb-3">
                    <x-label class="required">Email</x-label>
                    <x-input type="email"  name="email"/>
                    <x-error name="email" />
                </div>
                <div class="mb-3">
                    <x-label required>Пароль</x-label>
                    <x-input type="password"  name="password"/>
                    <x-error name="password" />
                </div>
                <div class="mb-3">
                    <x-label required>Пароль ещё раз</x-label>
                    <x-input type="password"  name="password_confirmation"/>
                    <x-error name="password_confirmation" />
                </div>
                <div class="mb-3">
                    <x-checkbox name="agreement" class="form-check ">
                        Запомни меня
                    </x-checkbox>
                </div>
                <x-button type="submit">Войти</x-button>
            </x-form>
        </div>
    </x-card>

@endsection



