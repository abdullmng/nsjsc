@extends('layouts.home')
@section('title', 'Who We Are')
@section('content')
    <section>
        <div class="py-5 px-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Who We Are</h1>
            </div>
        </div>

    </section>
    <section class="bg-white">
        <div class="row py-5 flex-row-reverse">
            <div class="col-md-6 px-4 py-5 text-center">
                <img src="{{ asset('bg-image.jpg') }}" alt="bg" class="img-fluid w-100">
            </div>
            <div class="col-md-6 px-4 py-5">
                <h6 class="my-4 text-niger-blue">Our Background.</h6>
                <p>
                    The Niger State Judicial Service Commission is a statutory body established by section 197(1) of the 1999 constitution of the Federal Republic of Nigeria (as amended). The commission is responsible for among other things, the appointment, promotion and discipline of judicial and non judicial staff.
                </p>

                <h6 class="my-4 text-niger-blue">Responsibilities</h6>
                <ol>
                    <li>
                        Administration department:- the administration department is responsible for the following functions:-
                        <ul>
                            <li>I.Management of all matters relating to staff promotion, conversion, confirmation of appointment, study leave, staff welfare and discipline via the instrumentality of the personnel management board (senior staff).</li>
                            <li>
                                Human capacity development by way of staff training, mentoring and development.
                            </li>
                            <li>
                                Management of assets of the commission including Office Building.
                            </li>
                            <li>
                                Liaison function i.e interfaces with other arms of Government and MDAs in matters affecting the well-being of the Commission.
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </section>
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
