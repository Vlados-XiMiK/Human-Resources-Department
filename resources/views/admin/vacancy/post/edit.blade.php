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
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>


    </div>


    <!-- FORM-->


    <section>
        <div class="form-box">

            <div class="form-value">
                <form action="{{ route('admin.job.update', $job->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h2>Редагування вакансії</h2>

                    <div class="formWrapper">
                        <div class="formLeft">
                            <div class="inputbox">

                                <input type="text" name="title" value="{{ $job->title }}">
                                <label for="">Введіть назву Вакансії</label>
                            </div>
                            @error('title')
                            <div class="text__error__category">{{ $message }}</div>
                            @enderror

                            <div class="redactor">
                                <textarea class="editor" name="content">{{ $job->content }}</textarea>

                            </div>
                            @error('content')
                            <div class="text__error__category">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="formRight">
                            <div class="selectbox">
                                <select class="form-select" id="category" name="category_id" >
                                    @foreach($category_jobs as $category_job)
                                        <option value="{{ $category_job->id }}"
                                            {{ $category_job->id == $job->category_id ? ' selected' : '' }}
                                        >{{ $category_job->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text__error__category">{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="preview__image" style="align-items: center; justify-content: center; display: flex">
                                    <img src="{{ url('storage/', $job->preview_image) }}" alt="preview_image" style="width: 150px; height: 150px">
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
                                <div class="text__error__category">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="button">Оновити</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--End-Form-->


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
