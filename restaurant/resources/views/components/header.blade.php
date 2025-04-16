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
            @auth
                <div class="logout-and-user-dashboard-btn">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="login-button">Logout</button>
                    </form>
                    <div class="user-dashboard-btn">
                        <a href="/user-page">
                            <img src="{{ asset('images/user-icon.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            @else
            <a class="login-link" href="/register">
                <button class="login-button">
                    Register
                </button>
            </a>
            @endauth
        </div>
    </nav>
</header>
