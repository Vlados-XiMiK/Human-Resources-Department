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
                <h1>Інформація про категорію</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active" href="{{ route('admin.Vacancy.index') }}">Вакансії</a>
                    </li>

                    <li>
                        <a href="#" >-></a>
                    </li>
                    <li>
                        <a href="#">Категорії</a>
                    </li>
                </ul>
            </div>


        </div>

        <table class="container" style="margin-top: 50px">
            <thead>
            <tr>
                <th><h1>ID категорії</h1></th>
                <th><h1>Назва категорії</h1></th>
                <th colspan="2"><h1>Дія</h1></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $category_job->id }}</td>
                <td class="text-color">{{ $category_job->title }}</td>
                <td><a href="{{ route('admin.Vacancy.categories.edit', $category_job->id) }}"><i class="fa-solid fa-pencil text-color" style="color: #024bca;"></i></a></td>
                <td>
                    <form action="{{ route('admin.Vacancy.categories.delete', $category_job->id) }}" method="POST" id="deleteForm{{ $category_job->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" style="border-radius: 0; border-color: black" onclick="confirmDelete('{{ $category_job->id }}')">
                            <i class="fa-solid fa-trash-can" style="color: red"></i>
                        </button>
                    </form>
                </td>

            </tr>

            </tbody>
        </table>

    </main>

    <script>
        function confirmDelete(category_jobId) {
            Swal.fire({
                title: "Ви впевнені?",
                text: "Ви хочете видалити цю категорію вакансій?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Видалити",
                cancelButtonText: "Відмінити"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + category_jobId).submit();
                }
            });
        }
    </script>
    <!-- MAIN -->
@endsection
