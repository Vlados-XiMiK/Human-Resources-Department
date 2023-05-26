@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Про нас</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Про нас</a>
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
            <a href="{{ route('admin.About_us.categories.create') }}" class="about_us-btn" style="margin-top: 20px;">Створити категорію</a>
            <a href="{{ route('admin.post.create') }}" class="about_us-btn" style="margin-top: 20px;">Створити пост</a>


            <div class="table-responsive" style="align-items: center">
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
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td><a href="{{ route('admin.About_us.categories.show', $category->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a> </td>
                            <td><a href="{{ route('admin.About_us.categories.edit', $category->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a> </td>
                            <td>
                                <form action="{{ route('admin.About_us.categories.delete', $category->id) }}" method="POST" id="deleteForm{{ $category->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" style="border-radius: 0; border-color: transparent" onclick="confirmDelete('{{ $category->id }}')">
                                        <i class="fa-solid fa-trash-can" style="color: red"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="table-responsive" >
                <h3 style="color: white; margin-top: 10px; text-align: center">Список постів</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>ПІБ</th>
                        <th colspan="3">Дія</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ route('admin.About_us.categories.show', $post->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a> </td>
                            <td><a href="{{ route('admin.About_us.categories.edit', $post->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a> </td>
                            <td>
                                <form action="{{ route('admin.About_us.categories.delete', $post->id) }}" method="POST" id="deleteForm{{ $post->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" style="border-radius: 0; border-color: transparent" onclick="confirmDelete('{{ $post->id }}')">
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
