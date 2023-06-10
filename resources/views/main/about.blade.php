@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css"/>
@endsection

@section('title')
    <title>Про нас</title>
@endsection

@section('content')
    <div class="page__main-block main-block">
        <div class="main-block__container _container">
            <div class="main-block__body">
                <h1 class="main-block__title">Про нас</h1>
                <section class="about-posts-section">
                    <div class="row">

                        @foreach($posts as $post)
                            <div class="about-posts about-post" data-aos="fade-right">
                                <div class="about-post-thumbnail-wrapper img__border">
                                    <img src="{{ 'storage/' . $post->main_image }}" alt="фото">
                                </div>

                                <p class="about-post-category">{{ $post->category }}</p>
                                <a class="about-post-permalink">

                                    <h6 class="about-post-title">{{ $post->title }}</h6>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </section>
            </div>

        </div>
@endsection
