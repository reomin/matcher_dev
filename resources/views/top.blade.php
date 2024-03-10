@extends('layouts.layout')

@section('content')
<div class="loginPage">
    <div class="container border m-5 p-5 bg">
        <div class="loginPage_contents text-center">
            <h1 class="h3 loginPage_contents_title">新しいマッチを見つけよう</h1>
            <div class="btn loginPage_contents_btn"><a class="text-black" href="{{ route('login') }}">ログインする</a></div></br>
            <div class="btn loginPage_contents_btn"><a class="text-black" href="{{ route('register') }}">登録する</a></div>
        </div>
    </div>
</div>
@endsection