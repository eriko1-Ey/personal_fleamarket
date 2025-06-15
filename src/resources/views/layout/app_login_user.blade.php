<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    @yield('title')
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}?v={{ time() }}" />
    <link rel="stylesheet" href="{{asset('css/common_login_user.css')}}?v={{ time() }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <img src="logo.svg" alt="COACHTECHロゴ" class="logo" />
        <input
            type="text"
            class="search-box"
            placeholder="なにをお探しですか？" />
        <nav class="nav-links">
            <a href="#">ログアウト</a>
            <a href="#">マイページ</a>
            <button class="upload-btn">出品</button>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>