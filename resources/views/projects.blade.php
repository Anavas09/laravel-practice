@extends('layouts\index')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse ($projects as $project)
            <li>
            <a href="{{ route('portfolio.show', $project) }}" target="_blank" rel="noopener noreferrer">{{$project->title}} </a>
            <small>{{$loop->first ? 'Es el primero' : ''}}</small>
            </li>
        @empty
            <li>
                No hay proyectos
            </li>
        @endforelse

        {{ $projects->links() }}
    </ul> 
@endsection
