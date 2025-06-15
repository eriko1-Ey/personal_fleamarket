@extends('layout.app_login_user')

@section('title')
<title>プロフィール設定</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/profile.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="form-container">
    <h2>プロフィール設定</h2>

    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="image-upload">
            <div class="image-preview"></div>
            <label class="image-label">
                画像を選択する
                <input type="file" name="profile_image" hidden />
            </label>
        </div>

        <label for="username">ユーザー名</label>
        <input
            type="text"
            id="username"
            name="username"
            placeholder="既存の値が入力されている" />

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