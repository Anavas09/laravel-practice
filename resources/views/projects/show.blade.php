@extends('layouts\index')

@section('title', 'Portfolio | '. $project->title)

@section('content')
<div class="container">
    <div class="bg-white shadow p-5 rounded">
        <h1>{{ $project->title }}</h1>
        <p class="text-secondary">{{ $project->description }}</p>
        <p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('portfolio.index') }}">Go back</a>
            @auth
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-primary" href="{{route('portfolio.edit', $project)}}">EDIT</a>
                    <a
                        href="#"
                        class="btn btn-danger"
                        onclick="event.preventDefault();
                                document.getElementById('delete-project').submit();"
                    >
                        DELETE
                    </a>
                </div>
                <form class="d-none" id="delete-project" action="{{ route('portfolio.destroy', $project) }}" method="POST">
                    @csrf @method('DELETE')
                </form>
            @endauth
        </div>
    </div>
</div>
@endsection
