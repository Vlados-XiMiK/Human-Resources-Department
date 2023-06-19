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
                <h1>Отримані заявки</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Отримані заявки</a>
                    </li>
                    <li>
                        <a href="#">-></a>
                    </li>
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
                <th><h1>Прізвище</h1></th>
                <th><h1>Вакансія</h1></th>
                <th><h1>Номер </h1></th>
                <th colspan="2"><h1>Дія</h1></th>
            </tr>
            </thead>
            <tbody>
            @foreach($sendingJob  as $sendingJobs )
                <tr>
                    <td>{{ $sendingJobs->id }}</td>
                    <td>{{ $sendingJobs->name }}</td>
                    <td>{{ $sendingJobs->surname }}</td>
                    <td>{{ $sendingJobs->title }}</td>
                    <td>{{ $sendingJobs->number }}</td>
                    <td><a href="{{ route('admin.sendingJob.show', $sendingJobs->id) }}"><i class="fa-solid fa-eye text-color" style="color: #024bca;"></i></a></td>
                    <td>
                        <form action="{{ route('admin.sendingJob.delete', $sendingJobs->id) }}" method="POST" id="deleteForm{{ $sendingJobs->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" style="border-radius: 0; border-color: black" onclick="confirmDelete('{{ $sendingJobs->id }}')">
                                <i class="fa-solid fa-trash-can" style="color: red"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>

    <!-- Доданий JavaScript-код -->
    <script>
        function confirmDelete(sendingJobsId) {
            Swal.fire({
                title: 'Ви впевнені?',
                text: "Ви хочете видалити дану заявку?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Видалити',
                cancelButtonText: 'Відмінити',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Якщо користувач підтверджує видалення
                    // Надсилаємо запит на видалення форми
                    document.getElementById('deleteForm' + sendingJobsId).submit();
                }
            });
        }
    </script>
@endsection
