@extends('layouts\index')

@section('title', 'Portfolio | Edit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validations-errors')

            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('portfolio.update', $project) }}" method="post">
                <h1 class="display-4">Edit project</h1>
                <hr>
                @method('PATCH')
                @include('projects._form', ['btnText' => 'Update'])
                <a class="btn btn-link btn-block" href="{{ route('portfolio.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
