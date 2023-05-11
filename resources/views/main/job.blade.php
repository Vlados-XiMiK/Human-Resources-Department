@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}" type="text/css"/>
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

                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/jobs/foto1.jpg" alt="blog post">
                            </div>
                            <p class="about-post-category">Викладач математики</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Детальніше</h6>
                            </a>
                        </div>
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/jobs/foto2.png" alt="blog post">
                            </div>
                            <p class="about-post-category">Викладач программування</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Детальніше</h6>
                            </a>
                        </div>
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/jobs/foto3.jpg" alt="blog post">
                            </div>
                            <p class="about-post-category">Бухгалтер</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Детальніше</h6>
                            </a>
                        </div>


                    </div>
                </section>
            </div>

        </div>
@endsection
