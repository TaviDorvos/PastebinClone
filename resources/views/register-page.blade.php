@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">
        <div class="col-10 col-md-4">
            <form id="register" method="post" action="{{ route('register-page.store')}}">
                {{csrf_field()}}
                <h1>Sign Up</h1>
                <h2 style="font-size: 14px;">Please fill this form to create an account:</h2>
                <div class="form-group mb-3 mt-3">
                    <label for="input-username">Username:</label>
                    <input type="text" class="form-control" id="input-username" name="input-username" required>
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="input-email">E-mail:</label>
                    <input type="email" class="form-control" id="input-email" name="input-email" required>
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="password_confirmation">Password Confirmation:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                @if(count($errors))
                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
            <h2 class="mt-4" style="font-size: 14px;">Already have an account? <a href="/login">Login here</a>.</h2>
        </div>
    </div>
@endsection