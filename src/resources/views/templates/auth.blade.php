@extends('templates.base')
@section('page.title', 'Страница регистрации')
@section('content')
    <sectio>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                  @yield('auth.content')
                </div>
            </div>
        </div>
    </sectio>
@endsection



