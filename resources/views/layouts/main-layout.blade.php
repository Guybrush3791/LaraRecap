<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel REL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>

      <header>
        @guest
          <span><a href="{{ route('register') }}">REGISTER</a></span>
          <span>Header</span>
          <span><a href="{{ route('login') }}">LOGIN</a></span>
        @else
          <span>Header</span>
          <span>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        LOGOUT
            </a>
        </span>
        @endguest
      </header>

        @yield('content')

      <footer>
        <span>Footer</span>
      </footer>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </body>
</html>
