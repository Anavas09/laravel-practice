@extends('layouts\index')

@section('title', 'Portfolio | Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validations-errors')

            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('portfolio.store') }}" method="post">
                <h1 class="display-4">Create project</h1>
                <hr>
                @include('projects._form', ['btnText' => 'Create'])
            </form>
        </div>
    </div>
</div>
@endsection
