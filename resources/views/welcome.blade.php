@extends('layouts.home')
@section('title', 'Home')
@section('content')
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
                    <img src="{{ asset('slider1.png') }}"
                        class="w-100 d-block" alt="First slide" loading="lazy" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ env('APP_NAME') }}</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('cj.webp') }}"
                        class="w-100 d-block" alt="Second slide" loading="lazy" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chief Judge/Chairman NSJSC</h5>
                        <p>Hon. Justice Halima Ibrahim Abdulmalik</p>
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
    <!--- ==================== About Section ======================= ------->
    <section>
        <div class="row py-5">
            <div class="col-md-12">
                <h4 class="text-center text-niger-blue">
                    Office of The Secretary
                </h4>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-4 text-center py-3">
                <img src="{{ asset('sec-image.jpg') }}" alt="Secretary"
                    class="img-fluid w-75 mb-4" style="border: 3px solid #00bfFF; border-radius: 10px" loading="lazy">
            </div>
            <div class="col-md-8 px-3">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <figure>
                            <blockquote class="blockquote">
                                <p>As Secretary of the  the Niger State Judicial Service Commission, my mission is to:</p>
                                <ul>
                                    <li>
                                        Provide exemplary leadership and administrative support to the Commission, ensuring effective and efficient management of its operations.
                                    </li>
                                    <li>
                                        Foster a culture of excellence, transparency, and accountability within the Commission and the judiciary.
                                    </li>
                                    <li>
                                        Facilitate the selection, appointment, and oversight of a meritorious and independent judiciary, upholding the highest standards of integrity and impartiality.
                                    </li>
                                    <li>
                                        Promote public trust and confidence in the judiciary through open communication.
                                    </li>
                                    <li>
                                        Ensure seamless coordination and collaboration with stakeholders, including the judiciary, government agencies, and the legal profession.
                                    </li>
                                    <li>
                                        Drive innovation and continuous improvement in the administration of justice, embracing technology and best practices.
                                    </li>
                                    <li>
                                        Uphold the principles of justice, equality, and human rights in all aspects of my work, embodying the values of integrity, professionalism, and dedication.
                                    </li>
                                </ul>
                            </blockquote>
                            <figcaption class="blockquote-footer text-niger-blue">
                                Hauwa Kulu Isah - <i>Secretary</i>
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
                <img src="{{ asset('xfeatures.jpg') }}" alt="image" class="image-fluid w-100" loading="lazy">
            </div>
            <div class="col-md-6 px-4">
                <div class="row justify-content-center py-5">
                    <div class="col-md-10 text-center">
                        <p class="lead mb-5">
                            <img src="{{ asset('nsjsc_logo.png') }}" alt="nsjsc" style="width: 50px; height: 50px;"
                                loading="lazy">
                            Judiciary Service Commission
                        </p>
                        <p class="lead mb-5">
                            <img src="{{ asset('hc.jpeg') }}" alt="hc" style="width: 50px; height: 50px;"
                                loading="lazy">
                            High Court of Justice.
                        </p>
                        <p class="lead mb-5">
                            <img src="{{ asset('sc.jpeg') }}" alt="sc" style="width: 50px; height: 50px;"
                                loading="lazy">
                            Sharia Court of Appeal
                        </p>
                        <p class="lead mb-5">
                            <img src="{{ asset('cca.jpeg') }}" alt="cca" style="width: 50px; height: 50px;"
                                loading="lazy">
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
                                <img src="{{ asset('cj-image.jpg') }}"
                                    alt="secretary" class="card-img-top" loading="lazy" >
                                <div class="card-body">
                                    <div class="mb-3 text-center">
                                        <figure class="text-center">
                                            <blockquote class="blockquote text-niger-blue">
                                                Hon. Justice Halima I. Abdulmalik
                                            </blockquote>
                                            <figcaption class="blockquote-footer">Chief Judge/Chairman NSJSC</figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow shadow-sm">
                                <img src="{{ asset('sec-image.jpg') }}"
                                    alt="secretary" class="card-img-top" loading="lazy" >
                                <div class="card-body">
                                    <div class="mb-3 text-center">
                                        <figure class="text-center">
                                            <blockquote class="blockquote text-niger-blue">
                                                Hauwa Kulu Isah
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
                                <img src="{{ asset('da-image.jpg') }}"
                                    alt="secretary" class="card-img-top" loading="lazy" >
                                <div class="card-body">
                                    <div class="mb-3 text-center">
                                        <figure class="text-center">
                                            <blockquote class="blockquote text-niger-blue">
                                                Fatima Zahra Mohammed
                                            </blockquote>
                                            <figcaption class="blockquote-footer">Director Administration</figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow shadow-sm">
                                <img src="{{ asset('df-image.jpg') }}"
                                    alt="secretary" class="card-img-top" loading="lazy" >
                                <div class="card-body">
                                    <div class="mb-3 text-center">
                                        <figure class="text-center">
                                            <blockquote class="blockquote text-niger-blue">
                                                Esther N. Jiya
                                            </blockquote>
                                            <figcaption class="blockquote-footer">Director Finance</figcaption>
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
                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        @foreach ($posts as $post)
                        <div class="swiper-slide">
                            <div class="card shadow">
                                <img src="{{ $post->image }}" class="card-img-top" alt="News Image 1"
                                    loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href="{{ route('news.single', $post->id) }}" class="btn btn-link">Read More..</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
@endsection
