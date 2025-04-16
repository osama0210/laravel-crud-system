<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>login</title>
</head>
<body>
@include('components.header')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<section class="register-body-container">
    <section class="signup-body">

        <section class="signup-half-two">
            <div class="register-text-container">
                <h1>Login</h1>
                <p>Don't have an account? <a class="login-link" href="/register">Register</a></p>
            </div>

            <form class="register-form" action="" method="post">
                @csrf
                <input class="register-input" type="email" name="email" placeholder="Email">
                <input class="register-input" type="password" name="password" placeholder="Enter your password">
                <input class="submit-btn" type="submit" value="Login">
            </form>
        </section>
        <div class="signup-half-one login-text">
            <h1>Welcome <br> Back!👋</h1>
            <p>Enter your credentials to access your account</p>
        </div>
    </section>
</section>
</body>
</html>
