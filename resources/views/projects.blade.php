@extends('layouts\index')

@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">Portfolio</h1>
            @auth
                <a class="btn btn-primary" href={{ route('portfolio.create') }} target="_blank" rel="noopener noreferrer">Create project</a>
            @endauth
        </div>

        <p class="lead text-secondary">
            My projects. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Alias in quaerat tenetur placeat nulla maiores dolore.
        </p>

        <ul class="list-group">
            @forelse ($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex text-secondary justify-content-between align-items-center" href="{{ route('portfolio.show', $project) }}" target="_blank" rel="noopener noreferrer">
                        <span class="font-weight-bold">
                            {{$project->title}}
                        </span>
                        <span class="text-black-50">
                            {{$project->created_at->format('d/m/y')}}
                        </span>
                     </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay proyectos
                </li>
            @endforelse

            {{ $projects->links() }}
        </ul>
    </div>
@endsection
