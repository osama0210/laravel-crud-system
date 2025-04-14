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
    <title>Register</title>
</head>
<body>
@include('components.header')
<section class="register-body-container">
    <section class="signup-body">
        <div class="signup-half-one">
            <h1>Get <br> Everything <br> You Want</h1>
            <p>It’s fast, easy, and completely free to get started.</p>
        </div>

        <section class="signup-half-two">
            <div class="register-text-container">
                <h1>Create an account</h1>
                <p>Already have an account? <a class="login-link" href="/login">Log in</a></p>
            </div>

            <form class="register-form" action="" method="post">
                @csrf
                <div class="name-input-container">
                    <input class="register-input" type="text" name="name" placeholder="First Name">
                    <input class="register-input" type="text" name="last_name" placeholder="Last Name">
                </div>
                <input class="register-input" type="email" name="email" placeholder="Email">
                <input class="register-input" type="password" name="password" placeholder="Enter your password">
                <input class="register-input" type="password" name="password" placeholder="Enter your password">
                <input class="submit-btn" type="submit" value="Signup">
            </form>
        </section>
    </section>
</section>
</body>
</html>
