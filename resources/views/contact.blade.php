@extends('layouts\index')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    @include('partials.session-status')

    <form method="POST" action="{{ route('contact')}}">
        @csrf
        <input type="text" name="name" value="{!! old('name') !!}" placeholder="Name"><br>
        {!! $errors->first('name', '<span>:message</span><br>') !!}

        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"><br>
        {!! $errors->first('email', '<span>:message</span><br>') !!}

        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject"><br>
        {!! $errors->first('subject', '<span>:message</span><br>') !!}

        <textarea name="content">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<span>:message</span><br>') !!}

        <button>Send</button>
    </form>
@endsection
