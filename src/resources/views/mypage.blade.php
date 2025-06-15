@extends('layout.app_login_user')

@section('title')
<title>マイページ</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/mypage.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <div class="avatar"></div>
        <div class="user-info">
            <h2>ユーザー名</h2>
        </div>
        <div class="edit-btn-wrapper">
            <a href="#" class="edit-btn">プロフィールを編集</a>
        </div>
    </div>

    <div class="tabs">
        <a href="#" class="tab active">出品した商品</a>
        <a href="#" class="tab">購入した商品</a>
        <a href="#" class="tab">取引中の商品</a>
    </div>

    <div class="product-grid">
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <p class="product-name">商品名</p>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <p class="product-name">商品名</p>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <p class="product-name">商品名</p>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <p class="product-name">商品名</p>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <p class="product-name">商品名</p>
        </div>
        <div class="product-card">
            <div class="product-image">商品画像</div>
            <p class="product-name">商品名</p>
        </div>
    </div>
</div>
@endsection