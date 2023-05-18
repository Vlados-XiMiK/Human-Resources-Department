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


            <div class="table-responsive">
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
                            <form action="{{ route('admin.About_us.categories.delete', $category->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border-radius: 0; border-color: transparent">
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

    <!-- MAIN -->
@endsection
