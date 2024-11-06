<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <title>@yield('page.title', config('app.name'))</title>
    @stack('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .required:after{
            content: "*";
            color: red;
            margin-left: 3px;
        }

        label {
            text-align: left;
            display: inline-block;
            width: 100%;
        }
    </style>
</head>
<body>
<div id="app"></div>
@include('includes.alert')
<div class="d-flex flex-column justify-between min-vh-100 ">
    @include('includes.header')
    <main class="flex-grow-1 py-3">
      @yield('content')
    </main>
    @include('includes.footer')
</div>
{{--<script type="module" src="{{ asset('resources/js/app.js') }}"></script>--}}
<script src="/js/bootstrap.min.js"></script>
@stack('js')
</body>
</html>
