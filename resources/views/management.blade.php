@extends('layouts.home')
@section('title', 'Management')
@section('content')
    <section>
        <div class="py-5 px-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">The Management</h1>
            </div>
        </div>

    </section>
    <section class="bg-white">
        <div class="row py-5 px-4 justify-content-center">
            <div class="col-md-3 mb-3">
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

            <div class="col-md-3 mb-3">
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

            <div class="col-md-3 mb-3">
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

            <div class="col-md-3 mb-3">
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

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow shadow-sm">
                    <img src="..."
                        alt="Assr. Secretary" class="card-img-top" loading="lazy" >
                    <div class="card-body">
                        <div class="mb-3 text-center">
                            <figure class="text-center">
                                <blockquote class="blockquote text-niger-blue">
                                    Aisha Muhammad Maiyaki Esq
                                </blockquote>
                                <figcaption class="blockquote-footer">Assistant Secretary</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-dark">
        <div class="row py-3"></div>
    </section>
@endsection
