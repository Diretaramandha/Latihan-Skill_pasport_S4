<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Online-Shop</a>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            @if (Session('gagal'))
                <p class="alert alert-danger mt-4">{{  Session('gagal') }}</p>
            @endif
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="post" action="/auth">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group mt-1">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <input type="submit" class="btn btn-secondary btn-block mt-3 w-100" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>