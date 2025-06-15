@extends('layout.app')

@section('title')
<title>ログイン</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="form-container">
    <h2>ログイン</h2>
    <form action="#" method="POST">
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" required />

        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" required />

        <button type="submit">ログインする</button>
    </form>

    <p class="login-link"><a href="#">会員登録はこちら</a></p>
</div>
@endsection