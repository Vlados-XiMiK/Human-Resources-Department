@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>
@endsection

@section('title')
    <title>Відділ кадрів</title>
@endsection

@section('content')
<div class="page__main-block main-block">
    <div class="main-block__container _container">
        <div class="main-block__body">
            <h1 class="main-block__title">Відділ кадрів <br> ВСП ЕТФК ХНТУ</h1>
            <div class="main-block__text">Тут ви можете залишити заявку на будь-яку <br> доступну вакансію</div>
            <div class="main-block__button">
                <a href="#" class="gradient-button" id="open_pop_up">Залишити заявку</a>
            </div>

        </div>
        <div class="pop_up" id="pop_up">
            <div class="pop_up_container">
                <div class="pop_up_body" id="pop_up_body">
                    <p>Залишити заявку</p>
                    <form method="post">
                        <input type="text" placeholder="Ім'я" />
                        <input type="text" placeholder="Прізвище" />
                        <input type="text" placeholder="Бажана вакансія" />
                        <input type="text" placeholder="Номер телефону" />
                        <div class="container_upload">
                            <div class="drop-area">
                                <i class="bx bxs-cloud-upload icon"></i>
                                <h3>
                                    Перетягніть або клацніть тут, щоб вибрати резюме
                                </h3>
                                <p>Розмір файлу має бути менше ніж <span>2MB</span></p>
                                <input type="file" accept="application/pdf,application/msword, application vnd.openxmlformats-officedocument.wordprocessingml.document, .docx" id="input-file" />
                            </div>
                        </div>

                        <div class="button-two">
                            <a href="#" class="gradient-button">Залишити заявку</a>
                        </div>
                    </form>
                    <div class="pop_up_close" id="pop_up_close">&#10006</div>
                </div>
            </div>
        </div>
    </div>
@endsection
