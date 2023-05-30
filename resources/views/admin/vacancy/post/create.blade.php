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
                <h1>Вакансії</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active" href="{{ route('admin.Vacancy.index') }}">Вакансії</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                    </li>
                </ul>
            </div>


        </div>


        <!-- FORM-->
       <!-- <div style="margin-top: 200px;"></div>
        <div class="login-box">
            <h2>Створення вакансії</h2>
            <form action="{{ route('admin.job.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="user-box">
                    <input type="text" name="title">
                    <label>Введіть назву вакансії</label>
                </div>
                @error('title')
                <div class="text__error__category">Це поле необхідно заповнити</div>
                @enderror

                    <button type="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Створити
                    </button>

            </form>
        </div>
-->
        <!--End-Form-->

        <section>
            <div class="form-box">

                <div class="form-value">
                    <form action="{{ route('admin.job.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2>Створення вакансії</h2>

                        <div class="formWrapper">
                            <div class="formLeft">
                                <div class="inputbox">

                                    <input type="text" name="title">
                                    <label for="">Введіть назву Вакансії</label>
                                </div>
                                @error('title')
                                <div class="text__error__category">Це поле необхідно заповнити</div>
                                @enderror

                                <div class="redactor">
                                    <textarea class="editor" name="content" ></textarea>
                                </div>
                                @error('content')
                                <div class="text__error__category">Це поле необхідно заповнити</div>
                                @enderror

                            </div>
                            <div class="formRight">
                                <div class="selectbox">
                                    <select class="form-select" id="category" name="category_id" required>
                                        @foreach($category_jobs as $category_job)
                                        <option value="{{ $category_job->id }}"
                                                {{ $category_job->id == old('$category_job->id') ? ' selected' : '' }}
                                        >{{ $category_job->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="inputimagebox">
                                    <div class="container_upload">
                                        <label for="input__image" class="drop-area">
                                            <i class="bx bxs-cloud-upload icon"></i>
                                            <h3>
                                                Перетягніть або клацніть тут, щоб вибрати фото
                                            </h3>
                                            <p>Розмір фото має бути менше ніж <span>2MB</span></p>
                                            <input type="file" accept="image/*" id="input-file" name="preview_image"
                                                   class="input-image"/>
                                        </label>
                                    </div>
                                    @error('preview_image')
                                    <div class="text__error__category">Це поле необхідно заповнити</div>
                                    @enderror
                                </div>
                                <button class="button" type="submit">Створити</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>


    </main>
    <script src=" {{ asset('js/upload-image.js') }} "></script>


    <script>ClassicEditor
            .create( document.querySelector( '.editor' ), {

                licenseKey: '',




            } )
            .then( editor => {
                window.editor = editor;




            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: ud3tvr17cb86-4kce3iu3c4z9' );
                console.error( error );
            } );
    </script>

    <!-- MAIN -->
@endsection
