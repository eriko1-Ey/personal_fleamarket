@extends('layout.app')

@section('title')
<title>メール認証のお願い</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/email_varification.css')}}?v={{ time() }}" />
@endsection

@section('content')
<div class="verification-container">
    <p class="message">
        登録していただいたメールアドレスに認証メールを送付しました。<br />
        メール認証を完了してください。
    </p>

    <a href="#" class="verify-button">認証はこちらから</a>

    <p class="resend-link">
        <a href="#">認証メールを再送する</a>
    </p>
</div>
@endsection