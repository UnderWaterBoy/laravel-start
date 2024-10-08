@extends('templates.main')
@section('page.title', $post->title);
@section('main.content')
    <x-title>
        {{$post->title}}
        <x-slot name="link">
            <a href="{{route('blog')}}"></a>
            Назад
        </x-slot>
    </x-title>
    <a href="{{route('blog')}}">

    </a>
    {{$post->body}}
@endsection

