@extends('layouts.home')
@section('title', 'Home')
@section('content')
    <!-- Carousel Section -->
    <section class="carousel-section" data-aos="fade-in">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <ol class="carousel-indicators d-none">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('slider1.png') }}" class="d-block w-100" alt="Niger State Judicial Service Comission"
                        loading="lazy">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4 fw-bold">{{ env('APP_NAME') }}</h2>
                        <p class="lead">Upholding Justice, Serving the Community</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('cj.webp') }}" class="d-block w-100" alt="Chief Judge/Chairman NSJSC" loading="lazy">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4 fw-bold">Chief Judge/Chairman NSJSC</h2>
                        <p class="lead">Hon. Justice Halima Ibrahim Abdulmalik</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Office of The Secretary</h2>
            <div class="row align-items-center">
                <div class="col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-right">
                    <img src="{{ asset('sec-image.jpg') }}" alt="Niger State Judicial Service Commission: Secretary"
                        class="img-fluid w-50 rounded-circle shadow-lg">
                </div>
                <div class="col-md-8" data-aos="fade-left">
                    <blockquote class="blockquote">
                        <p class="mb-4">As Secretary of the Niger State Judicial Service Commission, my mission is to:</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Provide exemplary
                                leadership and administrative support to the Commission.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Foster a culture of
                                excellence, transparency, and accountability.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Facilitate the
                                selection of a meritorious and independent judiciary.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Promote public trust
                                and confidence in the judiciary.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Ensure seamless
                                coordination with stakeholders.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Drive innovation in the
                                administration of justice.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Uphold the principles
                                of justice, equality, and human rights.</li>
                        </ul>
                    </blockquote>
                    <figcaption class="blockquote-footer text-end mt-3">
                        <cite title="Secretary">Hauwa Kulu Isah - Secretary
                    </figcaption>
                </div>
            </div>
        </div>
    </section>
    <!-- Structure Section -->
    <section class="structure-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Our Structure</h2>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="{{ asset('xfeatures.jpg') }}" alt="Structure of the NSJSC"
                        class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="row">
                        <div class="col-6 col-md-6 mb-4 text-center">
                            <img src="{{ asset('nsjsc_logo.png') }}" alt="Structure of the NSJSC" class="img-fluid mb-3"
                                style="max-width: 80px;">
                            <h5>Judiciary Service Commission</h5>
                        </div>
                        <div class="col-6 col-md-6 mb-4 text-center">
                            <img src="{{ asset('hc.jpeg') }}" alt="Structure of the NSJSC" class="img-fluid mb-3"
                                style="max-width: 80px;">
                            <h5>High Court of Justice</h5>
                        </div>
                        <div class="col-6 col-md-6 mb-4 text-center">
                            <img src="{{ asset('sc.jpeg') }}" alt="Structure of the NSJSC" class="img-fluid mb-3"
                                style="max-width: 80px;">
                            <h5>Sharia Court of Appeal</h5>
                        </div>
                        <div class="col-6 col-md-6 mb-4 text-center">
                            <img src="{{ asset('cca.jpeg') }}" alt="Structure of the NSJSC" class="img-fluid mb-3"
                                style="max-width: 80px;">
                            <h5>Customary Court of Appeal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Management Section -->
    <section class="management-section py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">The Management</h2>
            <div class="swiper mySwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <!-- Slides (same as before, but with improved styling) -->
                    @foreach (['cj-image.jpg', 'sec-image.jpg', 'da-image.jpg', 'df-image.jpg'] as $index => $image)
                        <div class="swiper-slide">
                            <div class="card border-0 shadow-lg">
                                <img src="{{ asset($image) }}"
                                    alt="['Chief Judge/Chairman NSJSC', 'Secretary', 'Director Administration', 'Director Finance'][$index]"
                                    class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-1">
                                        {{ ['Hon. Justice Halima I. Abdulmalik', 'Hauwa Kulu Isah', 'Fatima Zahra Mohammed', 'Esther N. Jiya'][$index] }}
                                    </h5>
                                    <p class="card-text text-muted">
                                        {{ ['Chief Judge/Chairman NSJSC', 'Secretary', 'Director Administration', 'Director Finance'][$index] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('management') }}" class="btn btn-outline-primary">View More</a>
            </div>
        </div>
    </section>
    <!-- News Section -->
    <section class="news-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Latest News</h2>
            <div class="swiper mySwiper1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @foreach ($posts as $post)
                        <div class="swiper-slide">
                            <div class="card shadow h-100">
                                <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text flex-grow-1">{{ Str::limit($post->description, 100) }}</p>
                                    <a href="{{ route('news.single', $post->id) }}" class="btn btn-primary mt-auto">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Our Location</h2>
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <div class="map-container shadow-lg rounded overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.8449154757286!2d6.529014710103966!3d9.608618990437979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104c712fba668b07%3A0xb5a4c7abdfa9c13c!2sNiger%20State%20Judiciary!5e0!3m2!1sen!2sng!4v1724620859619!5m2!1sen!2sng"
                            height="450" class="w-100" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        // Initialize Swiper
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        var newsSwiper = new Swiper('.mySwiper1', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
@endsection
