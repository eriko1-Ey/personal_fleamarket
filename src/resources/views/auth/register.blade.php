@extends('layout.app')

@section('title')
<title>会員登録</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="form-container">
    <h2>会員登録</h2>
    <form action="#" method="POST">
        <label for="username">ユーザー名</label>
        <input type="text" id="username" name="username" required />

        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" required />

        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" required />

        <label for="password_confirmation">確認用パスワード</label>
        <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            required />

        <button type="submit">登録する</button>
    </form>

    <p class="login-link"><a href="#">ログインはこちら</a></p>
</div>
@endsection