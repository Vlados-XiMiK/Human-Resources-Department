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
                <li>
                    <a href="">-></a>
                </li>

                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>


    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('admin.Vacancy.categories.create') }}" class="about_us-btn" style="margin-top: 20px;">Створити категорію</a>
            <a href="{{ route('admin.job.create') }}" class="about_us-btn" style="margin-top: 20px;">Створити пост вакансії</a>

            <div style="display: flex; justify-content: space-around">

            <div class="table-responsive">
                <h3 style="color: white; margin-top: 10px; text-align: center">Список категорій</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Назва</th>
                        <th colspan="3">Дія</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category_jobs as $category_job)
                    <tr>
                        <td>{{ $category_job->id }}</td>
                        <td>{{ $category_job->title }}</td>
                        <td><a href="{{ route('admin.Vacancy.categories.show', $category_job->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a> </td>
                        <td><a href="{{ route('admin.Vacancy.categories.edit', $category_job->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a> </td>
                        <td>
                            <form action="{{ route('admin.Vacancy.categories.delete', $category_job->id) }}" method="POST">
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

            <div class="table-responsive">
                <h3 style="color: white; margin-top: 10px; text-align: center">Список вакансій</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Назва</th>
                        <th colspan="3">Дія</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->title }}</td>
                            <td><a href="{{ route('admin.job.show', $job->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a> </td>
                            <td><a href="{{ route('admin.job.edit', $job->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a> </td>
                            <td>
                                <form action="{{ route('admin.job.delete', $job->id) }}" method="POST" id="deleteForm{{ $job->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" style="border-radius: 0; border-color: transparent" onclick="confirmDelete('{{ $job->id }}')">
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
    </div>

    <div style="margin-bottom: 200px;"></div>

</main>

    <script>
        function confirmDelete(category_jobId) {
            Swal.fire({
                title: "Ви впевнені?",
                text: "Ви хочете видалити цю вакансію?",
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
