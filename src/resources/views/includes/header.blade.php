<header class="">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('home')?'active': ''}}" aria-current="page" href="{{route('home')}}">Главная</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{Route::is('blog*')?'active': ''}}"  href="{{route('blog')}}">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('user*')?'active': ''}}"  href="{{route('user.posts.index')}}">Посты</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if (Auth::check())
                        <li class="nav-item">
                        <div class="nav-link">Здравствуйте, {{ Auth::user()->name }}!</div>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <x-button class="nav-link" type="submit">Выйти</x-button>
                            </form>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('login')?'active': ''}}" href="{{route('login')}}">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('registration')?'active': ''}}" href="{{route('registration')}}">Регистрация</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

