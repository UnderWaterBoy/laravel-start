<div class="border-bottom  pb-3 mb-3">
    <h1 class="h2 mb-0">
        {{$slot}}
    </h1>
    @isset($link)
        <div class="my-1">
            {{$link}}
        </div>
    @endisset
    @isset($right)
            <div class="my-1">
                {{$right}}
            </div>
    @endisset
</div>

