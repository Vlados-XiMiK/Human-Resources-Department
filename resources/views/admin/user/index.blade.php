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
                    <a href="#">Користувачі</a>
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
            <a href="{{ route('admin.user.create') }}" class="about_us-btn" style="margin-top: 20px;">Створити користувача</a>

            <div style="display: flex; justify-content: space-around">

            <div class="table-responsive">
                <h3 style="color: white; margin-top: 10px; text-align: center">Список користувачів</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Назва</th>
                        <th colspan="3">Дія</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td><a href="{{ route('admin.Vacancy.categories.show', $user->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a> </td>
                        <td><a href="{{ route('admin.Vacancy.categories.edit', $user->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a> </td>
                        <td>
                            <form action="{{ route('admin.Vacancy.categories.delete', $user->id) }}" method="POST">
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
