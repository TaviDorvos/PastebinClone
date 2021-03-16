<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Register - Pastebin Clone</title>
</head>

<body class="container">
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
                    <label for="input-password">Password</label>
                    <input type="password" class="form-control" id="input-password" name="input-password" required>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
            <h2 class="mt-4" style="font-size: 14px;">Already have an account? <a href="http://127.0.0.1:8000/login">Login here</a>.</h2>
        </div>
    </div>
</body>

</html>