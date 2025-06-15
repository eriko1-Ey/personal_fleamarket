@extends('layout.app_login_user')

@section('title')
<title>商品詳細</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/detail.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="detail-container">
    <div class="image-column">
        <div class="product-image">商品画像</div>
    </div>

    <div class="info-column">
        <h2 class="product-title">商品名がここに入る</h2>
        <p class="brand-name">ブランド名</p>
        <p class="price">¥47,000 <span>（税込）</span></p>

        <div class="actions">
            <span>⭐ 3</span>
            <span>💬 1</span>
        </div>

        <button class="purchase-btn">購入手続きへ</button>

        <section class="product-description">
            <h3>商品説明</h3>
            <p>カラー：グレー</p>
            <p>新品</p>
            <p>商品の状態は良好です。傷もありません。</p>
            <p>購入後、即発送いたします。</p>
        </section>

        <section class="product-info">
            <h3>商品の情報</h3>
            <p>
                <strong>カテゴリー：</strong> <span class="tag">洋服</span>
                <span class="tag">メンズ</span>
            </p>
            <p><strong>商品の状態：</strong> 良好</p>
        </section>

        <section class="comments">
            <h3>コメント (1)</h3>
            <div class="comment-item">
                <div class="comment-avatar"></div>
                <div>
                    <p class="comment-user">admin</p>
                    <p class="comment-text">こちらにコメントが入ります。</p>
                </div>
            </div>

            <form class="comment-form">
                <label for="comment">商品へのコメント</label>
                <textarea id="comment" name="comment"></textarea>
                <button type="submit">コメントを送信する</button>
            </form>
        </section>
    </div>
</div>
@endsection