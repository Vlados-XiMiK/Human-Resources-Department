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

                    <li>
                        <a href="">-></a>
                    </li>
                    <li>
                        <a href="">Інформація про пост</a>

                    </li>
                </ul>
            </div>


        </div>

        <section>
            <div class="form-box">
                <div>
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
                                    <option value="">{{ $category }}</option>
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
