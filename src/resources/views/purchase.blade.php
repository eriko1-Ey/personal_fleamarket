@extends('layout.app_login_user')

@section('title')
<title>商品購入</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/purchase.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="purchase-container">
    <section class="left-column">
        <div class="product-detail">
            <div class="product-image">商品画像</div>
            <div class="product-info">
                <h2>商品名</h2>
                <p class="price">¥47,000</p>
            </div>
        </div>

        <hr />

        <div class="payment-method">
            <label for="payment">支払い方法</label>
            <select id="payment" name="payment">
                <option value="">選択してください</option>
                <option value="convenience">コンビニ払い</option>
                <option value="card">カード払い</option>
            </select>
        </div>

        <hr />

        <div class="shipping-info">
            <div class="edit-box">
                <label>配送先</label>
                <a href="#" class="change-link">変更する</a>
            </div>
            <p>〒 XXX-YYYY<br />ここには住所と建物が入ります</p>
        </div>

        <hr />
    </section>

    <section class="right-column">
        <div class="summary-box">
            <p><span>商品代金</span> <span class="right">¥47,000</span></p>
            <p>
                <span>支払い方法</span> <span class="right">コンビニ払い</span>
            </p>
        </div>
        <button class="purchase-button">購入する</button>
    </section>
</div>
@endsection