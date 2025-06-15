@extends('layout.app_login_user')

@section('title')
<title>商品の出品</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/sell.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="container">
    <h1 class="title">商品の出品</h1>

    <section class="section">
        <h2 class="subtitle">商品画像</h2>
        <div class="image-upload">
            <button class="image-button">画像を選択する</button>
        </div>
    </section>

    <section class="section">
        <h2 class="subtitle">商品の詳細</h2>
        <div class="category-list">
            <span class="category">ファッション</span>
            <span class="category">家電</span>
            <span class="category">インテリア</span>
            <span class="category">レディース</span>
            <span class="category">メンズ</span>
            <span class="category">コスメ</span>
            <span class="category">本</span>
            <span class="category">ゲーム</span>
            <span class="category">スポーツ</span>
            <span class="category">キッチン</span>
            <span class="category">ハンドメイド</span>
            <span class="category">アクセサリー</span>
            <span class="category">おもちゃ</span>
            <span class="category">ベビー・キッズ</span>
        </div>

        <div class="form-group">
            <label>商品の状態</label>
            <select>
                <option selected>選択してください</option>
                <option>新品</option>
                <option>未使用に近い</option>
                <option>目立った傷や汚れなし</option>
            </select>
        </div>
    </section>

    <section class="section">
        <h2 class="subtitle">商品名と説明</h2>
        <div class="form-group">
            <label>商品名</label>
            <input type="text" />
        </div>
        <div class="form-group">
            <label>ブランド名</label>
            <input type="text" />
        </div>
        <div class="form-group">
            <label>商品の説明</label>
            <textarea rows="4"></textarea>
        </div>
        <div class="form-group">
            <label>販売価格</label>
            <div class="price-input"><span>¥</span><input type="text" /></div>
        </div>
    </section>

    <div class="submit-wrapper">
        <button class="submit-button">出品する</button>
    </div>
</div>
@endsection