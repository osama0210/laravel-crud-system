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
    <title>Success</title>
</head>
<body>

</body>
</html>
<section class="success-page">
    <img class="success-image" src="{{ asset('images/check.png') }}" alt="">
    <div class="success-text-container">
        <h1>
            Success🎉
        </h1>
        <p>Congratulations, your account has been successfully created.</p>
    </div>

        <a href="/login">
            <button class="submit-btn success-btn">
                Login
            </button>
        </a>
</section>
