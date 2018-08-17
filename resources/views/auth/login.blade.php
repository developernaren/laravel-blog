<html>
<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Login</h1>

        @if(Session::has('errorMessage'))
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                {{ Session::get('errorMessage') }}
            </div>
        @endif

        <form action="{{ url('login') }}" class="form" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Login</button>
            </div>

        </form>
    </div>
</div>
</body>
</html>
