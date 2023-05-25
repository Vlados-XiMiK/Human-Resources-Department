@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}" type="text/css"/>
@endsection

@section('title')
    <title>Контакти</title>
@endsection

@section('content')
    <div class="page__main-block main-block">
        <div class="main-block__container _container">
            <div class="main-block__body">
                <h1 class="main-block__title">Зв'язок з нами</h1>
                <form action="{{ route('main.store') }}" class="edica-contact py-5 mb-5" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 contact-form-wrapper">
                            <h5 class="contact__name" data-aos="fade-up">Форма для зв'язку</h5>
                            <div class="row">
                                <div class="form-group col-md-6" data-aos="fade-up">
                                    <label for="name">Ім'я</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ваше повне ім'я">
                                </div>
                                <div class="form-group col-md-6" data-aos="fade-up">
                                    <label for="phone">Номер телефону</label>
                                    <input type="text" class="form-control" id="phone" name="number" placeholder="Номер телефону">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <label for="email">Електронна пошта</label>
                                    <input type="email" class="form-control" id="email" name="mail" placeholder="example.gmail.com">
                                </div>
                                <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <label for="subject">Тема</label>
                                    <input type="text" class="form-control" id="subject" name="title" placeholder="Тема повідомлення">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                    <label for="message">Повідомлення</label>
                                    <div class="testing"><textarea name="content" id="message" class="form-control" placeholder="Вітаю. Що вас турбує?"></textarea></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg" data-aos="fade-up" data-aos-delay="300">Відправити повідомлення</button>
                        </div>
                        <div class="col-md-4 contact-sidebar" data-aos="fade-left">
                            <h5>Контакти</h5>
                            <p>Приймальна комісія: <br>  Тел. +38(095) 471-67-38 <br> E-mail: ett@kntu.net.ua</p>
                            <p>Адреса коледжу:
                                <br> Фактична: вул. Інститутська, 11, м. Хмельницький, 29016
                                <br>  Юридична: 73008, м. Херсон, Бериславське шосе, 22, <br> III корпус ХНТУ, IV поверх.</p>
                            <div class="embed-responsive embed-responsive-1by1 contact-map map__iframes">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1368.9639379890534!2d32.63538348510582!3d46.66768505796485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c411710c9edd89%3A0xfce4272c6349a5f8!2z0KXQndCi0KMsINGD0YfQtdCx0L3Ri9C5INC60L7RgNC_0YPRgSDihJYgMw!5e0!3m2!1suk!2sua!4v1682675225526!5m2!1suk!2sua"
                                    width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
