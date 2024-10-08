@extends('templates.main')
@section('page.title','Мои посты')
@section('main.content')
    <x-title>
        Мои посты
        <x-slot name="right">
            <x-button-link href="{{route('user.posts.create')}}">
                Cоздать
            </x-button-link>
        </x-slot>
    </x-title>
    @if(empty($posts))
        Нет ни одного поста
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-3 mb-5">
                    <a class="text-decoration-none text-reset" href="{{route('user.posts.show',$post->id)}}">
                        <h5 class="m-0">{{ $post->title}}</h5>
                    </a>
                    <div class="small text-muted">
                        {{$post->published_at}}
                    </div>
                </div>
            @endforeach
        </div>
        {{$posts->links()}}
    @endif
@endsection

