@extends('admin.layouts.main')
@section('links')
    <!-- Подключение стилей SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">

    <!-- Подключение скрипта SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
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
    <div class="row">
        <div class="col-20">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ім'я</th>
                        <th>Номер телефону</th>
                        <th>Електронна пошта</th>
                        <th>Тема</th>
                        <th colspan="2">Дія</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->number }}</td>
                        <td>{{ $contact->mail }}</td>
                        <td>{{ $contact->title }}</td>
                        <td><a href="{{ route('admin.Contact.show', $contact->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a></td>
                        <td>
                            <form action="{{ route('admin.Contact.delete', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border-radius: 0; border-color: transparent">
                                    <i class="fa-solid fa-trash-can" style="color: red"></i>
                                </button>

                            </form>

                        </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

</main>

    <!-- MAIN -->
@endsection
