<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>
    <!-- General CSS Files -->

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/admin/app.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
    <div>
        <form class="login" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" placeholder="email" class="@error('email') is-invalid @enderror"
                value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <input type="password" placeholder="password" class="@error('password') is-invalid @enderror">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button>Login</button>
        </form>
    </div>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>
