@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Користувачі</h1>
            <ul class="breadcrumb">
                <li>
                    <a class="active" href="{{ route('admin.user.index') }}">Користувачі</a>
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
        <h2>Додавання користувача</h2>
        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" name="name" >
                <label>Логін користувача</label>
            </div>
            @error('name')
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
