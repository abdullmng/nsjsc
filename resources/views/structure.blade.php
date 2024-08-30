@extends('layouts.home')
@section('title', 'Structure')
@section('content')
    <section>
        <div class="py-5 px-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Structure of NSJSC</h1>
            </div>
        </div>

    </section>
    <section class="bg-white">
        <div class="row flex-row-reverse py-5">
            <div class="col-md-6 px-4 py-5">
                <img src="{{ asset('xfeatures.jpg') }}" alt="image" class="image-fluid w-100" loading="lazy">
            </div>
            <div class="col-md-6 px-4">
                <div class="row justify-content-center py-5">
                    <div class="col-md-10 text-center">
                        <p class="lead mb-5">
                            <img src="{{ asset('nsjsc_logo.png') }}" alt="nsjsc" style="width: 50px; height: 50px;"
                                loading="lazy">
                                <br>
                            Judiciary Service Commission
                        </p>
                        <p class="lead mb-5">
                            <img src="{{ asset('hc.jpeg') }}" alt="hc" style="width: 50px; height: 50px;"
                                loading="lazy">
                                <br>
                            High Court of Justice.
                        </p>
                        <p class="lead mb-5">
                            <img src="{{ asset('sc.jpeg') }}" alt="sc" style="width: 50px; height: 50px;"
                                loading="lazy">
                                <br>
                            Sharia Court of Appeal
                        </p>
                        <p class="lead mb-5">
                            <img src="{{ asset('cca.jpeg') }}" alt="cca" style="width: 50px; height: 50px;"
                                loading="lazy">
                                <br>
                            Customary Court of Appeal
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="row py-3"></div>
    </section>
@endsection
