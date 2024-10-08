@props(['post'=>null])



<x-form {{$attributes}} >
    <x-form-item>
        <x-label class="required">Название поста</x-label>
        <x-input value="{{$post->title ?? ''}}"  name="title" autofocus/>
        <x-error name="title" />

    </x-form-item>
    <x-form-item>
        <x-label class="required">Содержание поста</x-label>
        <x-trix name="content" value="{{ $post->body ?? '' }}" />
        <x-error name="content" />
    </x-form-item>
    <x-form-item>
        <x-label class="required">Дата публикации</x-label>
        <x-input name="published_at" placegolder="dd.mm.yyyy" />
        <x-error name="published_at" />
    </x-form-item>
    <x-form-item>
        <x-checkbox name="published" >
            Опубликовать
        </x-checkbox>
        <x-error name="published" />
    </x-form-item>
    <x-form-item>
        <x-button type="submit">{{$slot}}</x-button>
    </x-form-item>
</x-form>

