<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="icon" href="{{ asset('images/positron.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap"
        rel="stylesheet" />
    @yield('styles') <!-- Tambahkan baris ini -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </style>
</head>

<body>

    <header>
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon"></div>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <ul class="nav-menu atlanta-font">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#filosofi" class="nav-link filosofi">Filosofi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#guide" class="nav-link guide">Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link group {{ request()->routeIs('group') ? 'active' : '' }}"
                            href="{{ route('group') }}">Group</a>
                    </li>
                </ul>
            </nav>

            <!-- Hamburger Menu -->
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav class="mobile-nav">
            <ul class="nav-menu mobile atlanta-font" id="mobileMenu">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link home" onclick="closeMenu()">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#filosofi" class="nav-link filosofi" onclick="closeMenu()">Filosofi</a>
                </li>
                <li class="nav-item">
                    <a href="#guide" class="nav-link guide" onclick="closeMenu()">Guide</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('group') }}" class="nav-link group" onclick="closeMenu()">Group</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
