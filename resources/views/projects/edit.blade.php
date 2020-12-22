@extends('layouts\index')

@section('title', 'Portfolio | Edit')

@section('content')
    <h1>Edit project</h1>
    @include('partials.validations-errors')

    <form action="{{ route('portfolio.update', $project) }}" method="post">
        @method('PATCH')
        @include('projects._form', ['btnText' => 'Edit'])
    </form>
@endsection
