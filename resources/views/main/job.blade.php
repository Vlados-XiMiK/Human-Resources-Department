@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/pop-up.css') }}" type="text/css"/>
@endsection

@section('title')
    <title>Вакансії</title>
@endsection

@section('content')
    <div class="page__main-block main-block">
        <div class="main-block__container _container">
            <div class="main-block__body">
                <h1 class="main-block__title">Доступні вакансії</h1>
                <section class="about-posts-section">
                    <div class="row">
                            @foreach($jobs as $job)
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="{{ 'storage/' . $job->preview_image }}" alt="blog post">
                            </div>
                            <p class="about-post-category">{{ $job->title }}</p>
                            <a class="about-post-permalink" href="#popup_{{ $job->id }}">
                                <h6 class="about-post-title">Детальніше</h6>
                            </a>
                        </div>
                            <div id="popup_{{ $job->id }}" class="overlay">
                                <div class="popup">
                                    <h2>{{ $job->title }}</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content" style="margin-top: 25px">
                                        {!! nl2br(htmlspecialchars_decode($job->content)) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>

            </div>

        </div>
@endsection
