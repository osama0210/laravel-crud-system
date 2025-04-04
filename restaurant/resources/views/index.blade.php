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
    <title>Document</title>
</head>
<body>
<header class="header">
    <nav class="nav">
        <a class="logo-link" href="/">
            <div class="logo-container">
                <h1>GoodFood<span>.</span></h1>
            </div>
        </a>
        <div class="links-container">
            <a href="">Home</a>
            <a href="/">About</a>
            <a href="/">Menu</a>
        </div>
        <div class="login-button-container">
            <a class="login-link" href="/">
                <button class="login-button">
                    login
                </button>
            </a>
        </div>
    </nav>
</header>
<section class="home-page">
    <div class="home-page-txt-container">
        <h1 class="">
            Delicious Food Dishes
        </h1>
        <p class="normal-text">Lorem ipsum dolor sit amet. Ut sequi quia sed voluptatibus explicabo cum impedit sunt et
            explicabo assumenda
            non earum omnis in ducimus sequi</p>
        <button class="login-button order-btn">
            Order now
        </button>
    </div>
</section>

<section class="service-section">
    <div class="all-services">
        <div class="service-container">
            <div class="service">
                <img src="/images/wifi-icon.svg" alt="Free WiFi">
            </div>
            <p class="normal-text">Enjoy free WiFi access for all our guests.</p>
        </div>

        <div class="service-container">
            <div class="service">
                <img src="/images/scooter-icon.svg" alt="Fast Delivery">
            </div>
            <p class="normal-text">Quick and reliable food delivery service.</p>
        </div>

        <div class="service-container">
            <div class="service">
                <img src="/images/chef-hat-icon.svg" alt="Professional Chefs">
            </div>
            <p class="normal-text">Our expert chefs prepare the finest dishes.</p>
        </div>

        <div class="service-container">
            <div class="service">
                <img src="/images/parking-icon.svg" alt="Free Parking">
            </div>
            <p class="normal-text">Spacious parking available for our customers.</p>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="about-us-content">
        <img class="about-us-img" src="/images/about-us-image.jpg" alt="">
        <div class="about-us-text">
            <h1>Something About Us</h1>
            <p>
                At GoodFood, we believe that food is more than just a meal—it’s an experience. Our mission is to bring
                people
                together through delicious, high-quality dishes made with fresh, locally sourced ingredients. Whether
                you’re
                dining in, ordering takeout, or enjoying our fast and reliable delivery service, we ensure that every
                bite
                is filled with flavor and care.
                <br>
                <br>
                Our Story
                <br>
                Founded with a passion for great food and warm hospitality, GoodFood started as a small family-owned
                restaurant. Over the years, we’ve grown into a beloved destination for food lovers who appreciate
                quality,
                taste, and exceptional service. Our team of skilled chefs combines traditional recipes with modern
                flavors
                to create dishes that leave a lasting impression.
                <br>
                <br>
                Why Choose Us?
                <br>
                ✔ We use only the best, freshest ingredients to prepare our meals. <br>
                ✔ Our talented chefs bring years of experience and creativity to every dish. <br>
                ✔ Cozy Atmosphere – Whether you dine in or take away.
                <br>
                <br>
                Our Promise:
                <br>
                At GoodFood, we don’t just serve meals—we create moments. From quick lunches to special celebrations, we are
                here to make every dining experience unforgettable. Come and taste the difference.

                Because good food isn’t just about eating, it’s about enjoying life! 🍽️✨
            </p>
            <button class="login-button contact-button">
                Contact
            </button>
        </div>
    </div>
</section>
<div class="between-section"></div>
<footer class="footer">
    <h1>Footer will come later</h1>
</footer>
</body>
</html>
