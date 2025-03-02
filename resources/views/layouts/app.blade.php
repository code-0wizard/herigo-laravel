<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'herigo')</title>
    @vite('resources/css/app.css')
  </head>
  <header>
    <div class="w-[90vw] mx-auto py-[10px] flex items-center bg-white h-[80px] relative transition-all duration-100">
      <a href="{{ route('top') }}">
        <img src="{{ asset('images/Herigo_logo.png') }}" alt="サイトのロゴ" style="width: 80px; height: 60px;">
      </a>
      <a href="{{ route('top') }}" class="font-bold pl-4 text-5xl">Herigo</a>
    </div>
  </header>
  <body>
    @yield('content')
  </body>
</html>
