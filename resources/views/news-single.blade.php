@extends('layouts.home')
@section('title', 'News')
@section('content')
    <section>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-6 fw-bold">{{ $post->title }}</h1>
                <p>Posted By: {{ $post->user->full_name }}, On: {{ $post->created_at->format('Y-m-d h:ia') }}</p>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="row justify-content-center py-5">
            <div class="col-md-8 px-4">
                <div class="mb-4" style="max-height: 400px; overflow: hidden">
                    <img src="{{ $post->image }}" alt="postImage" class="img-fluid w-100">
                </div>
                <div class="mb-4">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
