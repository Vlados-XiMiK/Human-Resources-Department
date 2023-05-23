@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Вакансії</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Вакансії</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>


    </div>


    <!-- FORM-->
    <div style="margin-top: 200px;"></div>
    <div class="login-box">
        <h2>Редагування категорії</h2>
        <form action="{{ route('admin.Vacancy.categories.update', $category_job->id ) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="user-box">
                <input type="text" name="title" value="{{ $category_job->title }}" >
                <label>Назва категорії</label>
            </div>
            @error('title')
            <div class="text__error__category">Це поле необхідно заповнити </div>
            @enderror

            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Оновити
            </button>
        </form>
    </div>


    <!--End-Form-->


</main>
    <!-- MAIN -->
@endsection
