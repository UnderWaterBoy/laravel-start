@extends('templates.auth')
@section('auth.content')
    <x-card>
        <x-card-header class="card-body">
            <h4 class="m-0">
                Вход
            </h4>
            <x-slot name="right">
                <a href="{{route('registration')}}">
                    Регистрация
                </a>
            </x-slot>
        </x-card-header>
        <div class="card-body">
            <x-form action="{{route('login.store')}}" method="POST">
                <div class="mb-3">
                    <x-label class="required">Имя</x-label>
                    <x-input type="text" name="name" autofocus/>
                </div>
                <div class="mb-3">
                    <x-label class="required">Email</x-label>
                    <x-input type="email" name="email"/>
                </div>
                <div class="mb-3">
                    <x-label required>Пароль</x-label>
                    <x-input type="password" name="password"/>
                </div>
                <div class="mb-3">
                    <x-checkbox class="form-check ">
                        Согласен на всё
                    </x-checkbox>
                </div>
                <x-button type="submit">Войти</x-button>
            </x-form>
        </div>
    </x-card>
@endsection

