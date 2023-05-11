@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>
        #content main{
            background-image:url({{ asset ('img/bg-footer.jpg')}});
        }
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
        <div class="col-12" style="margin-top: 20px;">
            <h2>Створення категорії</h2>
            <form action="{{ route('admin.About_us.categories.store') }}" method="POST" class="topBefore w-25" style="margin-top: 20px;">
                @csrf
                <input type="text" name="title"  placeholder="Назва категорії">
                @error('title')
                <div class="text-danger">Це поле необхідно заповнити </div>
                @enderror
                <input id="submit" type="submit" value="Додати">
            </form>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

</main>
    <!-- MAIN -->
@endsection
