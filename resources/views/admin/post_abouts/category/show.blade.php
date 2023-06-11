@extends('admin.layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/admin/table-style.css') }}">
@endsection
@section('content')
    <!-- MAIN -->
    <main>

        <div class="head-title">
            <div class="left">
                <h1>Інформація про категорію</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.About_us.index') }}" class="active">Розділ "Про нас"</a>
                    </li>
                    <li>
                        <a href="#" >-></a>
                    </li>
                    <li>
                        <a href="#">Інформація про категорію</a>
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
                <td>{{ $category->id }}</td>
                <td class="text-color">{{ $category->title }}</td>
                <td><a href="{{ route('admin.About_us.categories.edit', $category->id) }}"><i class="fa-solid fa-pencil text-color" style="color: #024bca;"></i></a></td>
                <td>
                    <form action="{{ route('admin.About_us.categories.delete', $category->id) }}" method="POST" id="deleteForm{{ $category->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" style="border-radius: 0; border-color: black" onclick="confirmDelete('{{ $category->id }}')">
                            <i class="fa-solid fa-trash-can" style="color: red"></i>
                        </button>
                    </form>
                </td>

            </tr>

            </tbody>
        </table>

    </main>
    <script>
        function confirmDelete(categoryId) {
            Swal.fire({
                title: "Ви впевнені?",
                text: "Ви хочете видалити цю категорію?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Видалити",
                cancelButtonText: "Відмінити"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + categoryId).submit();
                }
            });
        }
    </script>

    <!-- MAIN -->
@endsection
