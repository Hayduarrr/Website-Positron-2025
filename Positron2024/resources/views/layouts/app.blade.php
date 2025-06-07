<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="icon" href="{{ asset('images/positron.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/templatemo-ebook-landing.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ url('images/positron.png') }}" alt="logo" class="logo1">
                <span>POSITRON</span>
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto me-lg-4">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('Home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('Home') }}#section_2">Filosofi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('Home') }}#section_3">Guide</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('Home') }}#section_4">Time line</a>
                    </li>

                    <li class="nav">
                        <a class="nav-link" href="{{ route('group') }}">Group</a>

                    </li>
                </ul>


            </div>
        </div>
    </nav>

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