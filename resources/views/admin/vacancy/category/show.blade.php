@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
    <main>
        <style>

        </style>
        <div class="head-title">
            <div class="left">
                <h1>{{ $category_job->title }}</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active" href="{{ route('admin.Vacancy.index') }}">Вакансії</a>
                    </li>

                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="{{ route('admin.main.index') }}">Головна</a>

                    </li>
                </ul>
            </div>


        </div>
        <div class="row">
            <div class="col-12">

                <div class="table-responsive">
                    <table class="table">

                        <tbody>

                            <tr>
                                <td>ID</td>
                                <td colspan="3">{{ $category_job->id }}</td>

                            </tr>
                            <tr>
                                <td>Назва</td>
                                <td>{{ $category_job->title }}</td>
                                <td><a href="{{ route('admin.Vacancy.categories.edit', $category_job->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a></td>
                                <td>
                                    <form action="{{ route('admin.Vacancy.categories.delete', $category_job->id) }}" method="POST" id="deleteForm{{ $category_job->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" style="border-radius: 0; border-color: transparent" onclick="confirmDelete('{{ $category_job->id }}')">
                                            <i class="fa-solid fa-trash-can" style="color: red"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 200px;"></div>

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
