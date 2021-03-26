@extends('layouts.master')

@section('content')

@if( auth()->check() )
<div class="row justify-content-center">
    <div class="col-10 col-md-6">
        <form id="edit-bin">
            {{csrf_field()}}
            <h1>{{ $bin->title }}</h1>
            <div class="form-group">
                <label>Bin text:</label>
                <textarea class="form-control" rows="10" readonly>{{ $bin->bin_text}}</textarea>
            </div>
            <div class="form-group mb-3 mt-3">
                <label>Bin Name/Title:</label>
                <input value="{{ $bin->title }}" readonly>
            </div>
        </form>
        <a href="/bins">Go back</a>
    </div>
</div>
@else
<div class="text-center">
    <h1>Please <a href="/login">log in</a>.</h1>
</div>
@endif

@endsection