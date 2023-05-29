<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <script src="https://kit.fontawesome.com/c802f53a5e.js" crossorigin="anonymous"></script>
    <!-- Підключення стилів SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    @yield('links')

    <!-- Підключення скрипта SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <title>Панель Адміністрування</title>
</head>
<body>


<!-- SIDEBAR -->

<section id="sidebar">
    <a href="{{ route('admin.main.index') }}" class="brand">
        <i class='bx bxs-briefcase'></i>
        <span class="text">Адмін панель</span>
    </a>
    @include('admin.includes.sidebar')
</section>
<!-- SIDEBAR -->



<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Категорії</a>
        <form action="#">
            <div class="form-input">

                <button type="submit" class=""><i class='bx bxs-shield-alt-2'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>

        <a href="#" class="profile">
            <img src="{{ asset('img/people.png') }}">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
@yield('content')
    <!-- MAIN -->
</section>
<!-- CONTENT -->


<script src="{{ asset('js/admin/script.js') }}"></script>
</body>
</html>
