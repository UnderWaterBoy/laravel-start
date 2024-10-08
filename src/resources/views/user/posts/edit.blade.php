@extends('templates.main')
@section('page.title','Изменить пост')
@section('main.content')
    <x-title>
        Изменить пост
        <x-slot name="link">
            <x-button-link href="{{route('user.posts.index',$post->id)}}">
                Вернуться к посту
            </x-button-link>
        </x-slot>
    </x-title>

    <x-post.form action="{{route('user.posts.update', $post->id)}}" method="PUT" :post="$post">Сохранить изменения</x-post.form>
@endsection


