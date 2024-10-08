@extends('templates.main')
@section('page.title','Просмотр поста')
@section('main.content')
    <x-title>
        Просмотр поста
        <x-slot name="link">
            <a href="{{route('user.posts.index')}}">Вернуться к постам</a>
        </x-slot>
        <x-slot name="right">
            <x-button-link href="{{route('user.posts.edit', $post->id)}}">Изменить пост</x-button-link>
        </x-slot>
    </x-title>
        <div class="row">
                <div class="col-12 col-md-3 mb-5">
                    <h2 class="m-0">{{ $post->title}}</h2>
                    <div class="small text-muted">
                        {{now()->format('d.m.Y')}}
                    </div>
                    <x-card-body class="mb-3">
                        {{ $post->body}}
                    </x-card-body>
                </div>
        </div>
@endsection

