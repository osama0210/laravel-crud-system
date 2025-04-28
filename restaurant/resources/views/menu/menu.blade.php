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
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Menu</title>
</head>
<body>
@include('components.header')

<section class="menu-page">
    <div class="menu-img-container">
        <img src="{{ asset('images/menu-bg.jpg') }}" alt="">
    </div>
    <div class="search-categories-container">
        <div class="search-container">
            <h1>
                Menu
            </h1>
            <form class="search-form" action="">
                <div class="search">
                    <img src="{{ asset('images/search-icon.svg') }}" alt="">
                    <input id="searchInput" type="text" placeholder="Search...">
                </div>
            </form>
        </div>
        <div class="scroll-menu-container">
            <button class="scroll-btn"><img src="{{ asset('images/arrow-left-icon.svg') }}" alt=""></button>
            <div class="categories-items">
                @foreach($categories as $category)
                    <button class="category-item" data-category-id="{{ $category->id }}">
                        {{ $category->category_name }}
                    </button>
                @endforeach
            </div>
            <button class="scroll-btn"><img src="{{ asset('images/arrow-right-icon.svg') }}" alt=""></button>
        </div>
    </div>
    <div class="menu-items-container">
        <div class="menu-items">
            @foreach($products as $product)
                <div class="menu-item" data-category-id="{{ $product->category_id }}">
                    <div class="item-info">
                        <h2>{{ $product->product_name }}</h2>
                        <p>Price: <span class="price">{{"€" . $product->product_price }}</span></p>
                        <p>{{ $product->product_description }}</p>

                    </div>
                    <div class="item-img">
                        <img src="{{ asset('images/image-icon.svg') }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('components.footer')
</body>
</html>

