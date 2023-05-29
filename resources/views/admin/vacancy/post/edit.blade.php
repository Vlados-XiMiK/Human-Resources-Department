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
                    <a href="{{ route('admin.Vacancy.index') }}">Вакансії</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>


    </div>


    <!-- FORM-->
    <div style="margin-top: 400px;"></div>
    <div class="login-box">
        <h2>Редагування поста</h2>
        <form action="{{ route('admin.job.update', $job->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="user-box">
                <input type="text" name="title" value="{{ $job->title }}">
                <label>Введіть назву вакансії</label>
            </div>
            @error('title')
            <div class="text__error__category">Це поле необхідно заповнити</div>
            @enderror


                <button type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Оновити
                </button>
            </div>
        </form>
    </div>


    <!--End-Form-->


</main>

    <script src=" {{ asset('js/upload-image.js') }} "></script>
    <!-- MAIN -->
@endsection
