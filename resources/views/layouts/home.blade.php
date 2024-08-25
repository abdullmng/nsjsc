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
    <link rel="shortcut icon" href="{{ asset('nsjsc_logo.png') }}" type="image/x-icon" sizes="32x32">
    <style>
        .carousel-item {
            max-height: 570px;
        }

        .navbar .nav-item:hover {
            border-bottom: 3px solid #00bfff;
        }

        .navbar .active {
            border-bottom: 3px solid #00bfff;
        }

        .dropdown-item:hover {
            background-color: #00bfff54
        }

        .text-niger-blue {
            color: #00bfFF;
        }

        .bg-niger-blue {
            background-color: #00bfFF;
        }
    </style>
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
                            <a class="nav-link active" href="/" aria-current="page">Home
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">About Us</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Who we are</a>
                                <a class="dropdown-item" href="#">Mission and Vision Statement</a>
                                <a class="dropdown-item" href="#">Structure of NSJSC</a>
                                <a class="dropdown-item" href="#">Members of the Commission</a>
                                <a class="dropdown-item" href="#">Management</a>
                                <a class="dropdown-item" href="#">History</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News & Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">E-Recruitment</a>
                        </li>
                        <li class="nav-item dropdown d-none">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!--- ================== Carousel =================== ---->
        <section>
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <ol class="carousel-indicators" style="list-style: none">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="https://media.licdn.com/dms/image/D4D12AQE4Nt7MkBwDwA/article-cover_image-shrink_720_1280/0/1656486794498?e=2147483647&v=beta&t=BX6K7x_c9ZUjGCZEuG4qPQbNql20l_fuhJxuVzX1O9E"
                            class="w-100 d-block" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ env('APP_NAME') }}</h5>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://dailypost.ng/wp-content/uploads/2024/04/Chief-Judge-of-Niger-State-Justice-Halima-Ibrahim-Abdulmalik.jpeg"
                            class="w-100 d-block" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Chief Justice</h5>
                            <p>Justice Halima Abdulmalik</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--- ==================== About Section ======================= ------->
        <section>
            <div class="row py-5">
                <div class="col-md-12">
                    <h4 class="text-center text-niger-blue">
                        Office of The Secretary
                    </h4>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-4 text-center py-4">
                    <img src="https://www.lpcentre.com/new_storage/images/posts//92_1703843564.jpg" alt="Secretary"
                        class="img-fluid w-75 mb-4" style="border: 3px solid #00bfFF; border-radius: 10px">
                </div>
                <div class="col-md-8 px-3">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <figure class="text-center">
                                <blockquote class="blockquote">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consectetur a
                                        reiciendis inventore et minima alias, quibusdam corrupti amet, nesciunt maiores
                                        necessitatibus sint sunt est modi saepe expedita ipsa illo?</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quo
                                        veritatis aliquid? Doloremque unde explicabo natus debitis quibusdam
                                        necessitatibus ab deleniti! Aspernatur non inventore atque voluptas harum earum
                                        dolor sunt!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate officia
                                        doloremque esse. Ea, qui corrupti nesciunt rerum aspernatur magni aliquam
                                        distinctio possimus illum maiores, magnam voluptatem? Eligendi facilis
                                        laboriosam unde!</p>
                                </blockquote>
                                <figcaption class="blockquote-footer text-niger-blue">
                                    Hajiya Hauwa Yusuf
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Structure Section ===================== -->
        <section class="bg-white">
            <div class="row py-3">
                <div class="col-md-12 text-center">
                    <h3 class="text-niger-blue">NSJSC Structure.</h3>
                </div>
            </div>
            <div class="row flex-row-reverse py-5">
                <div class="col-md-6 px-4">
                    <img src="{{ asset('xfeatures.jpg') }}" alt="image" class="image-fluid w-100">
                </div>
                <div class="col-md-6 px-4">
                    <div class="row justify-content-center py-5">
                        <div class="col-md-10 text-center">
                            <p class="lead mb-5">
                                <img src="{{ asset('nsjsc_logo.png') }}" alt="nsjsc"
                                    style="width: 50px; height: 50px;">
                                Judiciary Service Commission
                            </p>
                            <p class="lead mb-5">
                                <img src="{{ asset('hc.jpeg') }}" alt="hc" style="width: 50px; height: 50px;">
                                High Court of Justice.
                            </p>
                            <p class="lead mb-5">
                                <img src="{{ asset('sc.jpeg') }}" alt="sc" style="width: 50px; height: 50px;">
                                Sharia Court of Appeal
                            </p>
                            <p class="lead mb-5">
                                <img src="{{ asset('cca.jpeg') }}" alt="cca" style="width: 50px; height: 50px;">
                                Customary Court of Appeal
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================== Management Section =============== --->
        <section>
            <div class="row py-5">
                <div class="col-md-12">
                    <h4 class="text-center text-niger-blue">The Management</h4>
                </div>
            </div>
            <div class="row justify-content-center py-4">
                <div class="col-md-10 px-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="card border-0 shadow shadow-sm">
                                    <img src="https://www.lpcentre.com/new_storage/images/posts//92_1703843564.jpg"
                                        alt="secretary" class="card-img-top">
                                    <div class="card-body">
                                        <div class="mb-3 text-center">
                                            <figure class="text-center">
                                                <blockquote class="blockquote text-niger-blue">
                                                    Hajiya Hauwa B. Yusuf
                                                </blockquote>
                                                <figcaption class="blockquote-footer">Secretary</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="card border-0 shadow shadow-sm">
                                    <img src="https://www.lpcentre.com/new_storage/images/posts//92_1703843564.jpg"
                                        alt="secretary" class="card-img-top">
                                    <div class="card-body">
                                        <div class="mb-3 text-center">
                                            <figure class="text-center">
                                                <blockquote class="blockquote text-niger-blue">
                                                    Hajiya Hauwa B. Yusuf
                                                </blockquote>
                                                <figcaption class="blockquote-footer">Secretary</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="card border-0 shadow shadow-sm">
                                    <img src="https://www.lpcentre.com/new_storage/images/posts//92_1703843564.jpg"
                                        alt="secretary" class="card-img-top">
                                    <div class="card-body">
                                        <div class="mb-3 text-center">
                                            <figure class="text-center">
                                                <blockquote class="blockquote text-niger-blue">
                                                    Hajiya Hauwa B. Yusuf
                                                </blockquote>
                                                <figcaption class="blockquote-footer">Secretary</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <div class="card border-0 shadow shadow-sm">
                                    <img src="https://www.lpcentre.com/new_storage/images/posts//92_1703843564.jpg"
                                        alt="secretary" class="card-img-top">
                                    <div class="card-body">
                                        <div class="mb-3 text-center">
                                            <figure class="text-center">
                                                <blockquote class="blockquote text-niger-blue">
                                                    Hajiya Hauwa B. Yusuf
                                                </blockquote>
                                                <figcaption class="blockquote-footer">Secretary</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat for other slides -->
                        </div>
                        <!-- Add Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Pagination (Optional) -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-12 text-center">
                    <a href="#" style="text-decoration: none" class="lead text-niger-blue">View more >></a>
                </div>
            </div>
        </section>
        <!---- ================ News Section ================ ---->
        <section class="bg-white">
            <section class="news-section py-5">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <h4 class="text-center text-niger-blue">Latest News</h4>
                        </div>
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <img src="{{ asset('xfeatures.jpg') }}" class="card-img-top" alt="News Image 1">
                                    <div class="card-body">
                                        <h5 class="card-title">News Title 1</h5>
                                        <p class="card-text">A brief description of the news or blog post. Lorem ipsum
                                            dolor sit amet...</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <img src="{{ asset('xfeatures.jpg') }}" class="card-img-top" alt="News Image 1">
                                    <div class="card-body">
                                        <h5 class="card-title">News Title 1</h5>
                                        <p class="card-text">A brief description of the news or blog post. Lorem ipsum
                                            dolor sit amet...</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <img src="{{ asset('xfeatures.jpg') }}" class="card-img-top" alt="News Image 1">
                                    <div class="card-body">
                                        <h5 class="card-title">News Title 1</h5>
                                        <p class="card-text">A brief description of the news or blog post. Lorem ipsum
                                            dolor sit amet...</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <img src="{{ asset('xfeatures.jpg') }}" class="card-img-top" alt="News Image 1">
                                    <div class="card-body">
                                        <h5 class="card-title">News Title 1</h5>
                                        <p class="card-text">A brief description of the news or blog post. Lorem ipsum
                                            dolor sit amet...</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat for other slides -->
                        </div>
                        <!-- Add Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Pagination (Optional) -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

        </section>
        <!--- =================== Contact Section ============= --->
        <section>
            <div class="row py-5">
                <div class="col-md-12 px-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.8449154757286!2d6.529014710103966!3d9.608618990437979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104c712fba668b07%3A0xb5a4c7abdfa9c13c!2sNiger%20State%20Judiciary!5e0!3m2!1sen!2sng!4v1724620859619!5m2!1sen!2sng"
                        height="450" class="w-100" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-white">
        <!-- place footer here -->
        <div class="row py-5 px-4">
            <div class="col-md-6">
                <h4>
                    <img src="{{ asset('nsjsc_logo.png') }}" alt="logo" style="width: 60px">
                    <span class="d-none d-md-inline">
                        {{ env('APP_NAME') }}
                    </span>
                </h4>
                <address>
                    <p>
                        Niger State Judiciary <br>
                        High Court, Minna South, Minna <br> 920101, Niger
                    </p>
                </address>
                <p>
                    <b>Phone:</b>
                    08030303030
                </p>
                <p>
                    <b>Email:</b>
                    support@nsjsc.ng
                </p>
            </div>
            <div class="col-md-6">
                <h4 class="text-niger-blue">Quick Links</h4>
                <p><a href="#" class="nav-link">Who we are</a></p>
                <p><a href="#" class="nav-link">Mission & Vision Statement</a></p>
                <p><a href="#" class="nav-link">Management</a></p>
                <p><a href="#" class="nav-link">Members</a></p>
                <p><a href="#" class="nav-link">History</a></p>
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
    <script>
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
    </script>
</body>

</html>
