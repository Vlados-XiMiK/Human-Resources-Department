@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
    <main>
        <style>

        </style>
        <div class="head-title">
            <div class="left">
                <h1>{{ $category->title }}</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Про нас</a>
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

                <div class="table-responsive">
                    <table class="table">

                        <tbody>

                            <tr>
                                <td>ID</td>
                                <td colspan="3">{{ $category->id }}</td>

                            </tr>
                            <tr>
                                <td>Назва</td>
                                <td>{{ $category->title }}</td>
                                <td><a href="{{ route('admin.About_us.categories.edit', $category->id) }}"><i class="fa-solid fa-pencil" style="color: #024bca;"></i></a></td>
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



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 200px;"></div>

    </main>

    <!-- MAIN -->
@endsection
