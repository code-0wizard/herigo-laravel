<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'herigo')</title>
  @vite(['resources/css/app.css', 'resources/js/app.ts'])
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header>
    <!--PC用のヘッダー-->
    <div class="w-[90vw] mx-auto py-[10px] flex items-center bg-white h-[80px] relative transition-all duration-100">
      <a href="{{ route('top') }}">
        <img src="{{ asset('icons/Herigo_logo.png') }}" alt="サイトのロゴ" class="w-[80px] h-[60px]">
      </a>
      <a href="{{ route('top') }}" class="font-bold pl-4 text-5xl">Herigo</a>
      <div class="flex items-center fixed top-[10px] left-1/2 transform -translate-x-1/2 mt-[10px]">
        <form action="" method="GET" class="relative">
          <input type="text" name="query" placeholder="世界遺産名で検索"
            class="w-[25vw] p-[10px_20px_10px_40px] border border-[0.5px] border-gray-400 shadow-md shadow-black/20 rounded-[30px] cursor-pointer bg-white hover:shadow-black/50">
          <img src="{{ asset('icons/search.svg') }}" alt="検索"
            class="absolute top-[10px] left-[10px] w-[25px] h-[25px]">
        </form>
      </div>

      @if (is_logged_in())
        <div class="border border-[0.5px] border-[#cacaca] rounded-[30px] p-[10px] flex ml-auto cursor-pointer relative gap-[15px] items-center h-[50px]">
          <img src="{{ asset('humberger_menu.svg') }}" width="30" height="30" />
          <img src="{{ Auth::user()->profile_image }}" width="30" height="30" class="pc-header-menu__user-icon" />
          <div class="hover-menu-list">
            <a href="{{ route('top') }}" class="hover-menu-list__heritage-index-link">世界遺産</a>
            <a href="{{ route('top') }}" class="hover-menu-list__user-index-link">ユーザー一覧</a>
            <!--<a href="{{ route('users.edit', Auth::user()) }}" class="hover-menu-list__profile-edit">プロフィール編集</a>-->
            <!--<a href="{{ route('heritage.like', Auth::user()) }}" class="hover-menu-list__bookmark-link">お気に入り</a>-->
            <hr class="hover-menu-list__hr">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="hover-menu-list__logout-link">ログアウト</button>
            </form>
          </div>
        </div>
      @else
        <div class="border border-[0.5px] border-[#cacaca] rounded-[30px] p-[10px] flex ml-auto cursor-pointer relative gap-[15px] items-center h-[50px]">
          <span>ログイン</span>
          <img src="{{ asset('icons/default_icon.png') }}" width="30" height="30" />
          <div class="hidden">
            <a href="{{ route('top') }}" class="hover-menu-list__heritage-index-link">世界遺産</a>
            <a href="{{ route('top') }}" class="hover-menu-list__user-index-link">ユーザー一覧</a>
            <hr class="hover-menu-list__hr">
            <a href="{{ route('top') }}" class="hover-menu-list__login-link">ログイン</a>
            <a href="{{ route('top') }}" class="hover-menu-list__signup-link">会員登録</a>
          </div>
        </div>
      @endif
    </div>
    <!--PC用のヘッダー-->
  </header>

  <!--ページ毎の個別内容-->
  <main>
    @yield('content')
  </main>
  <!--ページ毎の個別内容-->

</body>

</html>
