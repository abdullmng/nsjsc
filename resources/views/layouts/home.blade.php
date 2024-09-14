<!doctype html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="{{ asset('nsjsc_logo.png') }}" type="image/x-icon" sizes="32x32">
</head>

<body class="bg-light">
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 px-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('nsjsc_logo.png') }}" alt="logo" style="width: 60px">
                    <span class="d-none d-md-inline"> {{ env('APP_NAME') }} </span>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/"
                                aria-current="page">Home
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('who_we_are') ? 'active' : '' }} {{ request()->routeIs('mission_vision') ? 'active' : '' }} {{ request()->routeIs('structure') ? 'active' : '' }} {{ request()->routeIs('members') ? 'active' : '' }} {{ request()->routeIs('management') ? 'active' : '' }} {{ request()->routeIs('history') ? 'active' : '' }}"
                                href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">About Us</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="{{ route('who_we_are') }}">Who we are</a>
                                <a class="dropdown-item" href="{{ route('mission_vision') }}">Mission and Vision
                                    Statement</a>
                                <a class="dropdown-item" href="{{ route('structure') }}">Structure of NSJSC</a>
                                <a class="dropdown-item" href="{{ route('members') }}">Members of the Commission</a>
                                <a class="dropdown-item" href="{{ route('management') }}">Management</a>
                                <a class="dropdown-item" href="{{ route('history') }}">History</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Small Claims Court</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }} {{ request()->routeIs('news.single') ? 'active' : '' }}"
                                href="{{ route('news') }}">News & Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">E-Recruitment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-white">
        <!-- place footer here -->
        <div class="row py-5 px-4">
            <div class="col-md-4">
                <h4>
                    <img src="{{ asset('nsjsc_logo.png') }}" alt="logo" style="width: 60px" loading="lazy">
                    <span class="d-none d-md-inline text-niger-blue">
                        NSJSC
                    </span>
                </h4>
                <address>
                    <span class="d-block">Niger State Judiciary</span>
                    <span class="d-block">High Court, Minna South, Minna</span>
                    <span class="d-block">920101, Niger</span>
                </address>
                <p>
                    <b>Email:</b>
                    <a href="mailto:nigerstatejsc@gmail.com"
                        class="nav-link d-inline text-niger-blue">nigerstatejsc@gmail.com</a>
                </p>
            </div>
            <div class="col-md-4">
                <h4 class="text-niger-blue">Quick Links</h4>
                <p><a href="{{ route('who_we_are') }}" class="nav-link">Who we are</a></p>
                <p><a href="{{ route('mission_vision') }}" class="nav-link">Mission & Vision Statement</a></p>
                <p><a href="{{ route('management') }}" class="nav-link">Management</a></p>
                <p><a href="{{ route('members') }}" class="nav-link">Members</a></p>
                <p><a href="{{ route('history') }}" class="nav-link">History</a></p>
            </div>
            <div class="col-md-4">
                <h4 class="text-niger-blue">Newsletter</h4>
                <p>Enter your email address below to subscribe to our newsletter.</p>
                <div class="input-group">
                    <input type="email" name="" id="" class="form-control" autocomplete="false"
                        placeholder="johndoe@example.com">
                    <button class="btn btn-info bg-niger-blue text-white">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="bg-niger-blue p-4 text-center text-white">
            <p>&copy; {{ date('Y') }} {{ env('APP_NAME') }}, All Rights Reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const sticky = navbar.offsetTop;

            if (window.pageYOffset > sticky) {
                navbar.classList.add('fixed-top');
            } else {
                navbar.classList.remove('fixed-top');
            }
        })
    </script>
    @yield('scripts')
</body>

</html>
