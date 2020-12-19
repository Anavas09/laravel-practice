@extends('layouts\index')

@section('title', 'Portfolio | '. $project->title)

@section('content')
    {{ $project }}
@endsection
