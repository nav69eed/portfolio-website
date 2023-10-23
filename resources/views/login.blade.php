<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            height: 100vh;
            width: 100vw;
            display: grid;
            place-items: center;
        }
    </style>
</head>

<body class="">
    <form action="{{ route('loginuserss') }}" method="POST">
        @csrf
        @if (Session::has('fail'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('fail') }}
            </div>
        @endif

        <div class="form-group">

            <label for="exampleInputEmail1">Email address</label>
            <input type="" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email"
                value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger" role="alert" style="padding: 2px 5px; margin-top:3px">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                name="password">
                @error('password')
                <div class="alert alert-danger" role="alert" style="padding: 2px 5px; margin-top:3px">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
