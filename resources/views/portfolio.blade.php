@extends('layouts\index')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse ($portfolios as $portfolio)
            <li>
            {{$portfolio['title']}} <small>{{$loop->first ? 'Es el primero' : ''}}</small>
            </li>
        @empty
            <li>
                No hay proyectos
            </li>
        @endforelse
    </ul> 
@endsection
