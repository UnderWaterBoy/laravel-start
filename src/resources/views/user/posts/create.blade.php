@extends('templates.main')
@section('page.title','Создать пост')
@section('main.content')
    <x-title>
        Создать пост
        <x-slot name="link">
            <x-button-link href="{{route('user.posts.index')}}">
                Вернуться к постам
            </x-button-link>
        </x-slot>
    </x-title>

    <x-post.form action="{{route('user.posts.store')}}" method="POST" > Создать новый пост</x-post.form>
@endsection


