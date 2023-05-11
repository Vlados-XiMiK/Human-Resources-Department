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

                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/about/foto1.jpg" alt="blog post">
                            </div>
                            <p class="about-post-category">Ректор</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Зеленський Володимир Олександрович</h6>
                            </a>
                        </div>
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/about/foto2.jpg" alt="blog post">
                            </div>
                            <p class="about-post-category">Проректор</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Залужний Валерій Федорович</h6>
                            </a>
                        </div>
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/about/foto3.png" alt="blog post">
                            </div>
                            <p class="about-post-category">Декан</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Шмигаль Денис Анатолійович</h6>
                            </a>
                        </div>
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/about/foto4.jpg" alt="blog post">
                            </div>
                            <p class="about-post-category">Викладач</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Гордон Дмитро Ілліч</h6>
                            </a>
                        </div>
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/about/foto5.jpg" alt="blog post">
                            </div>
                            <p class="about-post-category">Викладач</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Поворознюк Олександр Григорович</h6>
                            </a>
                        </div>
                        <div class="about-posts about-post" data-aos="fade-right">
                            <div class="about-post-thumbnail-wrapper img__border">
                                <img src="public/img/about/foto6.jpg" alt="blog post">
                            </div>
                            <p class="about-post-category">Викладач</p>
                            <a class="about-post-permalink">
                                <h6 class="about-post-title">Порошенко Петро Олексійович</h6>
                            </a>
                        </div>

                    </div>
                </section>
            </div>

        </div>
@endsection
