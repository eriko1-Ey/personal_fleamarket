<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    @yield('title')
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}" />
    <link rel="stylesheet" href="{{asset('css/common.css')}}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <img src="logo.svg" alt="COACHTECHロゴ" class="logo" />
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>