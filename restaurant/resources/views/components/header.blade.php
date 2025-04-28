<header class="header">
    <nav class="nav">
        <a class="logo-link" href="/">
            <div class="logo-container">
                <h1>GoodFood<span>.</span></h1>
            </div>
        </a>
        <div class="links-container">
            <a href={{ route('index') }}>Home</a>
            <a href="{{ url('/')}}#about">About</a>
            <a href={{ route('menu') }} >Menu</a>
        </div>
        <div class="login-button-container">
            @auth()
                <div class="logout-and-user-dashboard-btn">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="login-button">Logout</button>
                    </form>
                    @php
                        $dashboardRoute = auth()->user()->role === 'admin' ? '/admin' : '/user-page';
                    @endphp
                    <div class="user-dashboard-btn">
                        <a href="{{ $dashboardRoute }}">
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
