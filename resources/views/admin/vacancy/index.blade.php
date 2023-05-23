@extends('admin.layouts.main')
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
                    <a href="#">Вакансії</a>
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
            <a href="{{ route('admin.Vacancy.categories.create') }}" class="about_us-btn" style="margin-top: 20px;">Створити категорію</a>


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
                    @foreach($category_job as $category_job)
                    <tr>
                        <td>{{ $category_job->id }}</td>
                        <td>{{ $category_job->title }}</td>
                        <td><a href="{{ route('admin.Vacancy.categories.show', $category_job->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a> </td>
                        <td><a href="{{ route('admin.Vacancy.categories.edit', $category_job->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a> </td>
                        <td>
                            <form action="{{ route('admin.Vacancy.categories.delete', $category_job->id) }}" method="Post">
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
