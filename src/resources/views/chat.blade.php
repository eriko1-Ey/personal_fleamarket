@extends('layout.app')

@section('title')
<title>取引チャット</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/chat.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="main">
    <!-- サイドバー -->
    <aside class="sidebar">
        <h2>その他の取引</h2>
        <ul class="chat-list">
            <li><button>商品名</button></li>
            <li><button>商品名</button></li>
            <li><button>商品名</button></li>
        </ul>
    </aside>

    <!-- チャットコンテンツ -->
    <section class="chat-content">
        <div class="chat-header">
            <div class="chat-title">「ユーザー名」さんとの取引画面</div>
            <button type="button" class="complete-button">取引を完了する</button>
        </div>

        <!-- 商品情報 -->
        <div class="product-info">
            <div class="product-image">商品画像</div>
            <div class="product-details">
                <h3>商品名</h3>
                <p>商品価格</p>
            </div>
        </div>

        <!-- チャットメッセージ一覧 -->
        <div class="messages">
            <!-- 相手 -->
            <div class="message-left">
                <div class="user-icon"></div>
                <div class="user-name">ユーザー名</div>
                <div class="message-box">相手のメッセージ</div>
            </div>

            <!-- 自分 -->
            <div class="message-right">
                <div class="user-name">ユーザー名</div>
                <div class="user-icon"></div>
                <div class="message-box">自分が送ったメッセージ</div>
                <div class="actions">
                    <span>編集</span>
                    <span>削除</span>
                </div>
            </div>
        </div>

        <!-- 入力フォーム -->
        <div class="input-area">
            <input type="text" placeholder="取引メッセージを記入してください" />
            <button class="add-image">画像を追加</button>
            <button class="send-button">📩</button>
        </div>
    </section>
</div>
@endsection