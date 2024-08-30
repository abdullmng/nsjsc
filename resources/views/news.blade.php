@extends('layouts.home')
@section('title', 'News')
@section('content')
    <section>
        <div class="py-5 px-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">News & Events</h1>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="row py-5 px-4 justify-content-center">
            @foreach ($blogs as $post)
                <div class="col-md-3 mb-3">
                    <div class="card shadow">
                        <img src="{{ $post->image ?? asset('xfeatures.jpg') }}" class="card-img-top" alt="News Image 1"
                            loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="{{ route('news.single', $post->id) }}" class="btn btn-link">Read More..</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="row py-3"></div>
    </section>
@endsection
