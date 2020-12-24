@extends('layouts\index')

@section('title', 'Home')

@section('content')
    <h1>Home {{ $name ?? "guess"}}</h1><br>

    @auth
        {{ auth()->user()->name }}
    @endauth
    
@endsection
