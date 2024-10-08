@extends('templates.main')
@section('main.content')
            <x-title>
                Список постов
            </x-title>
            @include('blog.filter')

            <div class="row">
                @foreach($posts as $post)
                    <div class="col-12 col-md-4">
                        <x-card>
                            <x-card-body>
                            <a class="text-decoration-none text-reset" href="{{route('blog.show',$post->id)}}">
                                <h5 class="m-0">{{ $post->title}}</h5>
                                <div class="body mt-2 mb-3">
                                    {{$post->content}}
                                </div>
                            </a>
                                <div class="small text-muted">
                                    {{$post->published_at->diffForHumans()}}
                                </div>
                            </x-card-body>
                        </x-card>
                    </div>
                @endforeach
            </div>
            {{$posts->links()}}
@endsection
