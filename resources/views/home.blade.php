@extends('layouts\index')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="displa-4 text-primary">@auth {{ auth()->user()->name.' | Web Developer'}} @else Web Development @endauth</h1>

            <p class="lead text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti quas amet repudiandae quis veniam, repellat quibusdam reiciendis, fugiat esse libero, ea id placeat? Ea hic non error, impedit adipisci saepe!</p>
            <a href="{{route('contact')}}" class="btn btn-lg btn-block btn-primary">Contact me</a>
            <a href="{{route('portfolio.index')}}" class="btn btn-lg btn-block btn-outline-primary">Portfolio</a>
        </div>
        
        <div class="col-12 col-lg-6">
            <img src="/img/home.svg" alt="Web Dev" class="img-fluid mb-4">
        </div>
    </div>
</div>
    
@endsection
