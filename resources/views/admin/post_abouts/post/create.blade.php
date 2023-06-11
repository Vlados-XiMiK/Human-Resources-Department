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
                        <a class="active" href="{{ route('admin.About_us.index') }}">Розділ "Про нас"</a>
                    </li>
                    <li>
                        <a href="">-></a>
                    </li>
                    <li>
                        <a href="">Створення поста</a>
                    </li>
                </ul>
            </div>


        </div>


        <!-- FORM-->
        <div style="margin-top: 200px;"></div>
        <div class="login-box">
            <h2>Створення поста</h2>
            <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="user-box">
                    <input type="text" name="title">
                    <label>Введіть ПІБ доданої людини</label>
                </div>
                @error('title')
                <div class="text__error__category">{{ $message }}</div>
                @enderror
                <div class="container_upload">
                    <div class="drop-area">
                        <i class="bx bxs-cloud-upload icon"></i>
                        <h3>
                            Перетягніть або клацніть тут, щоб вибрати фото
                        </h3>
                        <p>Розмір фото має бути менше ніж <span>2MB</span></p>
                        <input type="file" accept="image/*" id="input-file" name="main_image"/>
                    </div>
                </div>
                @error('main_image')
                <div class="text__error__image" style="color: red">{{ $message }}</div>
                @enderror
                <div class="label_category">

                    <label style="margin-top: 20px">Оберіть категорію</label>
                    <span class="custom-dropdown big">

                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                        @error('category_id')
                <div class="text__error__image" style="color: red">{{ $message }}</div>
                @enderror
            </span>


                    <button type="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Створити
                    </button>
                </div>
            </form>
        </div>


        <!--End-Form-->


    </main>
    <script src=" {{ asset('js/upload-image.js') }} "></script>
    <!-- MAIN -->
@endsection
