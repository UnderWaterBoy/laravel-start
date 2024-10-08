<button {{ $attributes->class([
     'btn btn-primary col-md-3'
])->merge([
    'type' => 'button'
])}}>
{{$slot}}
</button>
