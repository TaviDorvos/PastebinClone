<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Bins List</title>
</head>

<body class="container">
    @if( auth()->check() )
    <h1>Hi {{ auth()->user()->username }},</h1>
    <p>Below are your saved bins or you can <a href="/new-bin">create a new one right now</a>.</p>
    <ul>
        @foreach($bins as $bin)
        <li><a href="/bins/{{ $bin->id }}">{{ $bin->title }}</a></li>
        @endforeach
    </ul>
    @else
    <h1>Please log in.</h1>
    @endif
</body>

</html>