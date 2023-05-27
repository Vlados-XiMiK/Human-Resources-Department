@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
    <main>
        <style>

        </style>
        <div class="head-title">
            <div class="left">
                <h1>Інформація про вакансію</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active" href="{{ route('admin.Vacancy.index') }}">Про нас</a>
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

                <div class="table-responsive" style="display: flex; justify-content: space-around; margin-top: 20px">
                    <table class="table" style="height: 50px">

                        <tbody>

                            <tr>
                                <td>ID</td>
                                <td>ПІБ</td>
                                <td>Категорія</td>
                                <td colspan="2">Дія</td>



                            </tr>
                            <tr>
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->title }}</td>
                                <td>
                                    {{ $job->category->title }}
                                </td>

                                <td><a href="{{ route('admin.job.edit', $job->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a></td>
                                <td>
                                    <form action="{{ route('admin.job.delete', $job->id) }}" method="POST" id="deleteForm{{ $job->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" style="border-radius: 0; border-color: transparent" onclick="Delete('{{ $job->id }}')">
                                            <i class="fa-solid fa-trash-can" style="color: red"></i>
                                        </button>
                                    </form>
                                </td>


                            </tr>



                        </tbody>
                        <div class="w-25" style="display: flex; margin-top: 0px; flex-direction: column; justify-content: center; align-items: center; ">
                            <h2 style="color: white; text-align: center; justify-content: center;">Фото користувача: <br> {{ $job->title }}</h2>
                            <img src="{{ url('storage/' . $job->main_image) }}" alt="main_image" style="width: 300px; height: 300px;">


                        </div>
                    </table>

                </div>



            </div>
        </div>

        <div style="margin-bottom: 200px;"></div>

    </main>

    <script>
        function Delete(postId) {
            Swal.fire({
                title: "Ви впевнені?",
                text: "Ви хочете видалити цей пост?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Видалити",
                cancelButtonText: "Відмінити"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + postId).submit();
                }
            });
        }
    </script>
    <!-- MAIN -->
@endsection
