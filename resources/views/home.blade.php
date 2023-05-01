@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    <p>Welcome to my page! 🏠 </p>

    @include('footer')

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

