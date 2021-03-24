<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Pastebin Clone</title>
</head>

<body class="container">
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
    <h1>Please log in.</h1>
    @endif
</body>

</html>