<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Pastebin Clone</title>
</head>

<body class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-md-6">
            <form id="create-new-paste" method="post" action="{{ route('new-paste.store')}}">
            {{csrf_field()}}
                <h1>Create a new <i>pastebin:</i></h1>
                <div class="form-group">
                    <label for="input-text">Create new paste:</label>
                    <textarea class="form-control" id="input-text" name="input-text" rows="10" required></textarea>
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="input-title">Paste Name/Title:</label>
                    <input type="text" class="form-control" id="input-title"  name="input-title" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>