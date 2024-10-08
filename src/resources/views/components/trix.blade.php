@props(['name'=>'','value' =>''])

<trix-toolbar id="my_toolbar"></trix-toolbar>
<div class="more-stuff-inbetween"></div>
<trix-editor toolbar="my_toolbar" input="{{$name}}"></trix-editor>
<input id="{{$name}}" value="{{ $value }}" type="hidden" name="{{$name}}">
@once
    @push('css')
        <link rel="stylesheet" href="/css/trix.css"/>
    @endpush

    @push('js')
        <script src="/js/trix.js"></script>
    @endpush
@endonce
