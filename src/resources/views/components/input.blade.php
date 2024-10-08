@props(['value'=>'','name'=>''  ])
@php
    $inputValue = old($name, $value);
@endphp
<input {{ $attributes->class(([
    'form-control '. ($errors->has($name) ? 'is-invalid' : '')
]))->merge([
    'type'=> 'text',
      'name' => $name,
    'value' => $inputValue,
]) }} />
