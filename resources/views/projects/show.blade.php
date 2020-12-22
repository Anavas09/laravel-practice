@extends('layouts\index')

@section('title', 'Portfolio | '. $project->title)

@section('content')

    <h1>{{ $project->title }}</h1>
    <a href="{{route('portfolio.edit', $project)}}" target="_blank" rel="noopener noreferrer">Edit</a>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
