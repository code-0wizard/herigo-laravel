<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'herigo')</title>
    @vite('resources/css/app.css')
  </head>
  <header>
      <a href="{{ route('top') }}" class="w-20 h-15">
        <img src="{{ asset('images/Herigo_logo.png') }}" alt="サイトのロゴ">
      </a>
  </header>
  <body>
    @yield('content')
  </body>
</html>
