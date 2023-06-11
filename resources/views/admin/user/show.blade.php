@extends('admin.layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/admin/table-style.css') }}">
@endsection
@section('content')
    <!-- MAIN -->
    <main>

        <div class="head-title">
            <div class="left">
                <h1>Інформація про користувача</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active" href="{{ route('admin.user.index') }}">Користувачі</a>
                    </li>

                    <li>
                        <a href="#">-></a>
                    </li>
                    <li>
                        <a href="">Інформація про користувача</a>

                    </li>
                </ul>
            </div>


        </div>
    </main>
    <body>
        <table class="container" style="margin-top: 50px">
            <thead>
            <tr>
                <th><h1>ID користувача</h1></th>
                <th><h1>Логін користувача</h1></th>
                <th><h1>Електронна пошта користувача</h1></th>
                <th colspan="2"><h1>Дія</h1></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td class="text-color">{{ $user->name }}</td>
                <td class="text-color">{{ $user->email }}</td>
                <td><a href="{{ route('admin.user.edit', $user->id) }}"><i class="fa-solid fa-pencil text-color" style="color: #024bca;"></i></a></td>
                <td>
                    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" id="deleteForm{{ $user->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" style="border-radius: 0; border-color: black" onclick="confirmDelete('{{ $user->id }}')">
                            <i class="fa-solid fa-trash-can" style="color: red"></i>
                        </button>
                    </form>
                </td>

            </tr>

            </tbody>
        </table>

        <div style="margin-bottom: 200px;"></div>


    </body>
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
