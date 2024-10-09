<!doctype html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{ asset('nsjsc_logo.png') }}" type="image/x-icon" sizes="32x32">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <meta name="description" content="Official website of the Niger State Judicial Service Commission">
    <meta name="keywords" content="Judicial Service Commission, Niger State, Courts, Legal, Law, NSJSC">


    <style>
        :root {
            --primary-color: #00bfff;
            --secondary-color: #0056b3;
            --text-color: #333;
            --bg-color: #f8f9fa;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
            scroll-behavior: smooth;
            transition: all 0.3s ease;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar .nav-item {
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar .nav-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .navbar .nav-item:hover::after,
        .navbar .active::after {
            width: 100%;
        }

        .dropdown-item {
            transition: background-color 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: rgba(0, 191, 255, 0.1);
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
        }

        .social-icons a {
            color: #fff;
            margin-right: 15px;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--primary-color);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease-out;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-3 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('nsjsc_logo.png') }}" alt="Niger State Judicial Service Commission Logo"
                        style="width: 60px">
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
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <h4 class="mb-4">
                        <img src="{{ asset('nsjsc_logo.png') }}" alt="Niger State Judicial Service Commission Logo"
                            style="width: 60px" class="me-2">
                        <span class="text-primary">NSJSC</span>
                    </h4>
                    <address>
                        <p><i class="fas fa-map-marker-alt me-2"></i> High Court, Minna South, Minna, 920101, Niger</p>
                        <p><i class="fas fa-envelope me-2"></i> <a href="mailto:nigerstatejsc@gmail.com"
                                class="text-white">nigerstatejsc@gmail.com</a></p>
                    </address>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="mb-4">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('who_we_are') }}" class="text-white">Who we are</a></li>
                        <li><a href="{{ route('mission_vision') }}" class="text-white">Mission & Vision</a></li>
                        <li><a href="{{ route('management') }}" class="text-white">Management</a></li>
                        <li><a href="{{ route('members') }}" class="text-white">Members</a></li>
                        <li><a href="{{ route('history') }}" class="text-white">History</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="mb-4">Newsletter</h4>
                    <p>Stay updated with our latest news and events.</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email"
                                aria-label="Email" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </form>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center py-3 mt-4 border-top border-secondary">
            <p class="mb-0">&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000, // 3 seconds between slides
                disableOnInteraction: false, // Continue autoplay after user interaction
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var newsSwiper = new Swiper('.mySwiper1', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000, // 3 seconds between slides
                disableOnInteraction: false, // Continue autoplay after user interaction
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

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
