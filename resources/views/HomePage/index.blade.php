@extends('layout')

@section('title','Đăng nhập')

@section('content')
    @include('HomePage.navbar')
    @include('HomePage.main_content')
    @include('HomePage.footer')
    @include('LoginPage.login')
@endsection