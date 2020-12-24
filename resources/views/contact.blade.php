@extends('layouts\index')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form
                    method="POST"
                    action="{{ route('contact')}}"
                    class="bg-white shadow rounded py-3 px-4"
                >
                    @csrf
                    <h1 class="display-4">Contact</h1>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="@error('name') is-invalid @else border-0 @enderror form-control bg-light shadow-sm" type="text" name="name" value="{!! old('name') !!}" placeholder="Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="@error('email') is-invalid @else border-0 @enderror form-control bg-light shadow-sm" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" class="@error('subject') is-invalid @else border-0 @enderror form-control bg-light shadow-sm" type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="@error('content') is-invalid @else border-0 @enderror form-control bg-light shadow-sm" id="content" name="content">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg btn-block">Send</button>
                </form></div>
        </div>
    </div>
@endsection
