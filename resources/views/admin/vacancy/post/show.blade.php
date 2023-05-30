@extends('admin.layouts.main')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/admin/input_post_vacancy.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/ckeditor/sample/styles.css') }}">
    <script src="{{ asset('plugins/ckeditor/build/ckeditor.js') }}"></script>


@endsection
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
                        <a class="active" href="{{ route('admin.Vacancy.index') }}">Вакансії</a>
                    </li>

                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="{{ route('admin.main.index') }}">Головна</a>

                    </li>
                </ul>
            </div>


        </div>
        <!--
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

                            <img src="{{ url('storage/' . $job->preview_image) }}" alt="main_image" style="width: 300px; height: 300px;">
        -->
        <section>
            <div class="form-box">

                <div class="form-value">
                    <div>
                        <h2>Інформація про вакансію</h2>

                        <div class="formWrapper">
                            <div class="formLeft">
                                <div class="inputbox">

                                    <input type="text" name="title" value="{{ $job->title }}" readonly>

                                </div>
                                @error('title')
                                <div class="text__error__category">Це поле необхідно заповнити</div>
                                @enderror

                                <div class="redactor">
                                    <textarea class="editor" name="content" readonly>{{ $job->content }}</textarea>

                                </div>
                                @error('content')
                                <div class="text__error__category">Це поле необхідно заповнити</div>
                                @enderror

                            </div>
                            <div class="formRight">
                                <div class="selectbox">
                                    <select class="form__info" id="category" name="category_id" disabled>
                                        <option value="">{{ $job->category_job->title }}</option>
                                    </select>
                                </div>
                                <div class="preview__image" style="align-items: center; justify-content: center; display: flex">
                                    <img src="{{ url('storage/', $job->preview_image) }}" alt="preview_image" style="width: 150px; height: 150px">
                                </div>
                                <div class="inputimagebox">

                                </div>
                                <a class="button" href="{{ route('admin.job.edit', $job->id) }}">Змінити вакансію</a>
                                <form action="{{ route('admin.job.delete', $job->id) }}" method="POST" id="deleteForm{{ $job->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="button" style="margin-top: 20px" onclick="Delete('{{ $job->id }}')">
                                        Видалити вакансію
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        function Delete(jobId) {
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
                    document.getElementById('deleteForm' + jobId).submit();
                }
            });
        }
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.editor' ), {
                licenseKey: '',
                readOnly: true,
            })
            .then( editor => {
                window.editor = editor;
            })
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: ud3tvr17cb86-4kce3iu3c4z9' );
                console.error( error );
            } );
    </script>
    <!-- MAIN -->
@endsection
