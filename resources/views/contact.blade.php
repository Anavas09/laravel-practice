@extends('layouts\index')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form method="POST" action="{{ route('contact')}}">
        @csrf
        <input type="text" name="name" value="Angel" placeholder="Name">
        <input type="email" name="email" value="davia09ram@gmail.com" placeholder="Email">
        <input type="text" name="subject" value="Asunto" placeholder="Subject">
        <textarea name="content">Test message</textarea>
        <button>Send</button>
    </form>
@endsection
