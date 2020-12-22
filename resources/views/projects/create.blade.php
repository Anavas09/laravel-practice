@extends('layouts\index')

@section('title', 'Portfolio | Create')

@section('content')
    <h1>Create project</h1>
    @include('partials.validations-errors')

    <form action="{{ route('portfolio.store') }}" method="post">
        @include('projects._form', ['btnText' => 'Create'])
    </form>
@endsection
