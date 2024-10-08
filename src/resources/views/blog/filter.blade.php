<x-form action="{{route('blog')}}" method="GET">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="mb-3">
                <x-input name="search" value="{{request('search')}}" placeholder="Поиск" />
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="mb-3">
                <x-select name="category_id" value="{{request('category_id')}}" :options="[null => 'Все категории',1=>'Первая категория',2=>'Вторая категория']" placeholder="Поиск" />
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 ">
            <div class="mb-3">
                <x-button type="submit">Применить</x-button>
            </div>
        </div>
    </div>
</x-form>
