@extends('layout.app_login_user')

@section('title')
<title>商品一覧</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/exhibition.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="product-list-container">
    <div class="tabs">
        <a href="#" class="tab">おすすめ</a>
        <a href="#" class="tab active">マイリスト</a>
    </div>

    <div class="product-grid">
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <div class="product-namebox">
                <p class="product-name">商品名</p>
                <p class="product-price">¥0000</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <div class="product-namebox">
                <p class="product-name">商品名</p>
                <p class="product-price">¥0000</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <div class="product-namebox">
                <p class="product-name">商品名</p>
                <p class="product-price">¥0000</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <div class="product-namebox">
                <p class="product-name">商品名</p>
                <p class="product-price">¥0000</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <div class="product-namebox">
                <p class="product-name">商品名</p>
                <p class="product-price">¥0000</p>
            </div>
        </div>
    </div>
</div>
@endsection