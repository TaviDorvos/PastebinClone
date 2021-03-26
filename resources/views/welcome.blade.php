@extends('layouts.master')

@section('content')

<div class="text-center">
    <h1>Welcome to my pastebin clone!</h1>
    <p><i>What is a pastebin?</i></p>
    <p>A pastebin or text storage site is a type of online content hosting service where users can store plain text, e.g. to source code snippets for code review via Internet Relay Chat (IRC). The first pastebin was the eponymous pastebin.com. Other sites with the same functionality have appeared, and several open source pastebin scripts are available. Pastebins may allow commenting where readers can post feedback directly on the page. GitHub Gists are a type of pastebin with version control.</p>
    
    @if( auth()->check() )

    <p><b><a href="/bins">Go to your saved bins list.</a></b></p>

    @else

    <p><b>Do you have an account? <a href="/login">Login here</a></b></p>
    <p><b>You don't have an account? <br> No worries! You can <a href="/register">register here</a>.</b></p>

    @endif
</div>

@endsection