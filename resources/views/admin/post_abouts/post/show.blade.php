@extends('admin.layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/admin/info_post.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
@section('content')
    <!-- MAIN -->
    <main>
        <style>

        </style>
        <div class="head-title">
            <div class="left">
                <h1>Інформація про пост</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active" href="{{ route('admin.About_us.index') }}">Про нас</a>
                    </li>

                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="{{ route('admin.main.index') }}">Головна</a>

                    </li>
                </ul>
            </div>


        </div>
       <!-- <div class="row">
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
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    {{ $post->category->title }}
                                </td>

                                <td><a href="{{ route('admin.post.edit', $post->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a></td>
                                <td>
                                    <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" id="deleteForm{{ $post->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" style="border-radius: 0; border-color: transparent" onclick="Delete('{{ $post->id }}')">
                                            <i class="fa-solid fa-trash-can" style="color: red"></i>
                                        </button>
                                    </form>
                                </td>


                            </tr>



                        </tbody>
                        <div class="w-25" style="display: flex; margin-top: 0px; flex-direction: column; justify-content: center; align-items: center; ">
                            <h2 style="color: white; text-align: center; justify-content: center;">Фото користувача: <br> {{ $post->title }}</h2>
                            <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" style="width: 300px; height: 300px;">


                        </div>
                    </table>

                </div>



            </div>
        </div>
-->

        <section>
            <div class="form-box">
                <form action="">
                    <h2>Інформація про пост</h2>
                    <div class="formWrapper">
                        <div class="leftSide">
                            <img src="{{ url('storage/' . $post->main_image) }}" class="imageStyle">
                        </div>
                        <div class="rightSide">
                            <div class="inputbox">
                                <input type="text" value="{{ $post->title }}" class="placeholder-color" readonly>
                            </div>

                            <div class="selectbox">
                                <select class="form-select" id="category" name="category" disabled>
                                    <option value="">{{ $post->category->title }}</option>
                                </select>
                            </div>
                            <a class="button" href="{{ route('admin.post.edit', $post->id) }}">Змінити пост</a>
                            <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" id="deleteForm{{ $post->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" style="margin-top: 20px;" class="button" onclick="Delete('{{ $post->id }}')">
                                    Видалити пост
                                </button>
                            </form>

                        </div>
                    </div>
                </form>
            </div>
        </section>


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
    <script>
        function redirectToEditPage(url) {
            window.location.href = url;
        }
    </script>
    <!-- MAIN -->
@endsection
