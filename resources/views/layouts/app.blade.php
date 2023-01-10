<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Еда</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="conteiner">
            <nav class="navigation">
                <div class="header_content">
                    <div class="header_content_block">
                        <div class="header_leftBlock">
                            <a href="{{route('welcome')}}"><img src="{{asset('img/Logo.png')}}" alt=""></a>
                        </div>
                        <div class="header_rightBlock">
                            <svg id="dropdownCategory" xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 12 16"><path fill-rule="evenodd" d="M11.41 9H.59C0 9 0 8.59 0 8c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zm0-4H.59C0 5 0 4.59 0 4c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM.59 11H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1H.59C0 13 0 12.59 0 12c0-.59 0-1 .59-1z"/></svg>
                            <input type="text" placeholder="Поиск">
                            <a href="{{route('cartPage')}}">
                                Корзина
                            </a>
                            <div class="cart_count">
                                5
                            </div>
                            @if (Auth::check())
                                <a href="">
                                    {{Auth::user()->name_customer}}
                                </a>
                                <a id="LogOut">
                                    Выйти
                                </a>
        
                                {{-- <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form> --}}
                            @else
                                <a href="/login">
                                    Войти 
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </body>
</html>