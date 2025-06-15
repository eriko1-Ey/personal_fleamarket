@extends('layout.app_login_user')

@section('title')
<title>住所の変更</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/edit_address.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="form-container">
    <h2>住所の変更</h2>
    <form action="#" method="POST">
        <label for="postcode">郵便番号</label>
        <input
            type="text"
            id="postcode"
            name="postcode"
            placeholder="既存の値が入力されている" />

        <label for="address">住所</label>
        <input
            type="text"
            id="address"
            name="address"
            placeholder="既存の値が入力されている" />

        <label for="building">建物名</label>
        <input
            type="text"
            id="building"
            name="building"
            placeholder="既存の値が入力されている" />

        <button type="submit">更新する</button>
    </form>
</div>
@endsection