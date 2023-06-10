@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>{{ $contact->title }}</h1>
            <ul class="breadcrumb">
                <li>
                    <a class="active" href="{{ route('admin.Contact.index') }}">Вхідні повідомлення</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>


    </div>
    <div class="wrapper">
        <h2>{{ $contact->title }}</h2>
        <textarea readonly>{{ $contact->content }}</textarea>
    </div>

    <div style="margin-bottom: 200px;"></div>

</main>

    <!-- MAIN -->
@endsection
