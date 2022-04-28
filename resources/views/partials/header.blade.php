<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <div class="navbar-brand" style="width: 200px; margin-block: auto">
            <a class="navbar-brand" style="font-family: 'Baskerville'; font-size: 35px; margin-left: 580px" href="{{route('main_page')}}">UserProject</a>
        </div>
        @guest
        <div class="navbar-collapse collapse" style="max-width: 120px; margin-right: -900px">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login_page')}}">Авторизация</a>
                </li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" style="max-width: 120px;margin-right: 20px">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('registration_page')}}">Регистрация</a>
                </li>
            </ul>
        </div>
        @endguest
        @auth
            <div class="navbar-collapse collapse" style="max-width: 120px;margin-right: -900px">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user_profile')}}">Профиль</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse" style="max-width: 120px;margin-right: 0 px">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Выйти</a>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</nav>
