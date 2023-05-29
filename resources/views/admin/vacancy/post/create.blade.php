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
                    <form action="">
                        <h2>Створення вакансії</h2>

                        <div class="formWrapper">
                            <div class="formLeft">
                                <div class="inputbox">

                                    <input type="text">
                                    <label for="">Введіть назву Вакансії</label>
                                </div>

                                <div class="redactor">


                                                <div class="editor">

                                </div>

                                </div>

                            </div>
                            <div class="formRight">
                                <div class="selectbox">
                                    <select class="form-select" id="category" name="category">
                                        <option value="">Оберіть категорію</option>
                                        <option value="category1">Категория 1</option>
                                        <option value="category2">Категория 2</option>
                                        <option value="category3">Категория 3</option>
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
                                            <input type="file" accept="image/*" id="input-file" name="main_image"
                                                   class="input-image"/>
                                        </label>
                                    </div>
                                </div>
                                <button>Створити</button>

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
