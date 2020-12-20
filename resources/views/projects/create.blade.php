@extends('layouts\index')

@section('title', 'Portfolio | Create')

@section('content')
    <h1>Create project</h1>
    <form action="{{ route('portfolio.store') }}" method="post">
        @csrf
        <label for="formTitle">
            Title <br>
            <input type="text" name="title" id="formTitle">
        </label>
        <br>
        <label for="formURL">
            URL <br>
            <input type="text" name="url" id="formURL">
        </label>
        <br>
        <label for="formDescription">
            Description <br>
            <textarea name="description" id="formDescription"></textarea>
        </label>
        <br>
        <br>
        <button>Create</button>
    </form>
@endsection
