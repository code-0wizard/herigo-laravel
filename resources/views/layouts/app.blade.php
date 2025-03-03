<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'herigo')</title>
    @vite('resources/css/app.css')
  </head>
  <header>
    <!--PC用のヘッダー-->
    <div class="w-[90vw] mx-auto py-[10px] flex items-center bg-white h-[80px] relative transition-all duration-100">
      <a href="{{ route('top') }}">
        <img src="{{ asset('images/Herigo_logo.png') }}" alt="サイトのロゴ" class="w-[80px] h-[60px]">
      </a>
      <a href="{{ route('top') }}" class="font-bold pl-4 text-5xl">Herigo</a>
      <div class="flex items-center fixed top-[10px] left-1/2 transform -translate-x-1/2 mt-[10px]">
        <form action="" method="GET" class="relative">
          <input type="text" name="query" placeholder="世界遺産名で検索" class="w-[25vw] p-[10px_20px_10px_40px] border border-[0.5px] border-gray-400 shadow-md shadow-black/20 rounded-[30px] cursor-pointer bg-white hover:shadow-black/50">
          <img src="{{ asset('images/search.svg') }}" alt="検索" class="absolute top-[10px] left-[10px] w-[25px] h-[25px]">
        </form>
      </div>
    </div>
    <!--スマホ用のヘッダー-->
    
  </header>
  <body>
    @yield('content')
  </body>
</html>
