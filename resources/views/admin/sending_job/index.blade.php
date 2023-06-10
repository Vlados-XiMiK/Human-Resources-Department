@extends('admin.layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/admin/table-style.css') }}">
@endsection
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Вхідні повідомлення</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Вхідні повідомлення</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>


    </div>

    <table class="container" style="margin-top: 50px">
        <thead>
        <tr>
            <th><h1>ID</h1></th>
            <th><h1>Ім'я</h1></th>
            <th><h1>Номер телефону</h1></th>
            <th><h1>Електронна пошта</h1></th>
            <th><h1>Тема</h1></th>
            <th colspan="3"><h1>Дія</h1></th>

        </tr>
        </thead>
        <tbody>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href=""><i class="fa-solid fa-eye text-color" style="color: #024bca;"></i></a></td>
            <td>
                <form action="" method="POST">

                    <button type="button" style="border-radius: 0; border-color: black">
                        <i class="fa-solid fa-trash-can" style="color: red"></i>
                    </button>
                </form>
            </td>

        </tr>

        </tbody>
    </table>


</main>

    <!-- Доданий JavaScript-код -->
    <script>
        function confirmDelete(contactId) {
            Swal.fire({
                title: 'Ви впевнені?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText:'Видалити',
                cancelButtonText:'Відмінити',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Якщо користувач підтверджує видалення
                    // Надсилаємо запит на видалення форми
                    document.getElementById('deleteForm' + contactId).submit();
                }
            });
        }
    </script>
@endsection
