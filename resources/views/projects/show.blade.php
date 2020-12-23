@extends('layouts\index')

@section('title', 'Portfolio | '. $project->title)

@section('content')

    <h1>{{ $project->title }}</h1>
    <a href="{{route('portfolio.edit', $project)}}" target="_blank" rel="noopener noreferrer">Edit</a>
    <form action="{{ route('portfolio.destroy', $project) }}" method="POST">
        @csrf @method('DELETE')
        <button>DELETE</button>
    </form>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
