@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Про нас</h1>
            <ul class="breadcrumb">
                <li>
                    <a class="active" href="{{ route('admin.About_us.index') }}">Розділ "Про нас"</a>
                </li>
                <li>
                    <a href="">-></a>
                </li>
                <li>
                    <a href="">Створення категорії</a>
                </li>
            </ul>
        </div>


    </div>


    <!-- FORM-->
    <div style="margin-top: 200px;"></div>
    <div class="login-box">
        <h2>Створення категорії</h2>
        <form action="{{ route('admin.About_us.categories.store') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" name="title" >
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
                Створити
            </button>
        </form>
    </div>


    <!--End-Form-->


</main>
    <!-- MAIN -->
@endsection
