@extends('layouts.master')

@section('content')

@if( auth()->check() )
<div class="row justify-content-center">
    <div class="col-10 col-md-6">
        <form id="create-new-paste" method="post" action="{{ route('new-bin.store')}}">
            {{csrf_field()}}
            <h1>Create a new <i>pastebin:</i></h1>
            <div class="form-group">
                <label for="input-text">Create new paste:</label>
                <textarea class="form-control" id="input-text" name="input-text" rows="10" required></textarea>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="input-title">Paste Name/Title:</label>
                <input type="text" class="form-control" id="input-title" name="input-title" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@else
<div class="text-center">
    <h1>Please <a href="/login">log in</a>.</h1>
</div>
@endif

@endsection