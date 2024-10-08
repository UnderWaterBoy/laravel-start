@php($id = Str::uuid())
@props(['name'=>''])
<label class="form-check-label" for="{{$id}}">
    {{$slot}}
</label>
<input class="form-check-input" name='{{$name}}'  type="checkbox" {{ $attributes->merge([
    'value' => 1,
    'checked' => !! old($attributes->get('name')),
])}}
       id="{{$id}}">

