@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">
        <div class="col-10 col-md-4">
            <form id="login" method="post" action="{{ route('login-page.store')}}">
                {{csrf_field()}}
                <h1>Login</h1>
                <h2 style="font-size: 14px;">Please fill in your credentials to login.</h2>
                <div class="form-group mb-3 mt-3">
                    <label for="input-username">Username:</label>
                    <input type="text" class="form-control" id="input-username" name="input-username" required>
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="input-password">Password</label>
                    <input type="password" class="form-control" id="input-password" name="input-password" required>
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
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <h2 class="mt-4" style="font-size: 14px;">Don't have an account? <a href="/register">Register here</a>.</h2>
        </div>
    </div>
@endsection