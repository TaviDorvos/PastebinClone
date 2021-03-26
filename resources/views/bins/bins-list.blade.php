@extends('layouts.master')

@section('content')

@if( auth()->check() )
<h1>Hi {{ auth()->user()->username }},</h1>
<p>Below are your saved bins or you can <a href="/new-bin">create a new one right now</a>.</p>
<ul>
    @foreach($bins as $bin)
    <li><a href="/bins/{{ $bin->id }}">{{ $bin->title }}</a></li>
    @endforeach
</ul>
@else
<div class="text-center">
    <h1>Please <a href="/login">log in</a>.</h1>
</div>
@endif

@endsection