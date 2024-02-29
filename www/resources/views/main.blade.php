@php use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\Request;use Illuminate\Support\Facades\Storage; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Мини-театр "Омега"</title>
</head>
<body>
<div class="content">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/about" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img width="50px" alt="" src="{{asset('storage/logo.png')}}">
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li>
                <a href="/about" class="nav-link px-2 {{Request::is('/about')?'link-secondary':'link-dark'}}">О нас</a>
            </li>
            <li>
                <a href="/perfomance"
                   class="nav-link px-2 {{Request::is('/perfomance')?'link-secondary':'link-dark'}}">Афиша</a>
            </li>
            <li>
                <a href="/findUs" class="nav-link px-2 {{Request::is('/findUs')?'link-secondary':'link-dark'}}">Где нас
                    найти?</a>
            </li>
        </ul>
        @auth()
            <div class="col-md-3 text-end">
                <a type="button" class="btn btn-outline-info me-2"></a>
                @if(Auth::user()?->isAdmin == 1)
                    <a type="button" class="btn btn-info"></a>
                @endif
            </div>
        @endauth
        @guest()
            <div class="col-md-3 text-end">
                <a type="button" class="btn btn-outline-info me-2">Войти</a>
                <a type="button" class="btn btn-info" href="/registration">Зарегестрироваться</a>
            </div>
        @endguest
    </header>
</div>
<div class="content">
    @yield('content')
</div>
<div class="content">
    <footer>

    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
