@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Редагування користувача</h1>
            <ul class="breadcrumb">
                <li>
                    <a class="active" href="{{ route('admin.user.index') }}">Користувачі</a>
                </li>
                <li>
                    <a href="#">-></a>
                </li>
                <li>
                    <a href="">Редагування користувача</a>
                </li>
            </ul>
        </div>


    </div>


    <!-- FORM-->
    <div style="margin-top: 200px;"></div>
    <div class="login-box">
        <h2>Редагування користувача</h2>
        <form action="{{ route('admin.user.update', $user->id ) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="user-box">
                <input type="text" name="name" value="{{ $user->name }}" >
                <label>Логін користувача</label>
            </div>
            @error('name')
            <div class="text__error__category">{{ $message }}</div>
            @enderror
            <div class="user-box">
                <input type="text" name="email" value="{{ $user->email }}" >
                <label>Електронна адреса</label>
            </div>
            @error('email')
            <div class="text__error__category">{{ $message }}</div>
            @enderror
            <div class="label_category">
            <label style="margin-top: 20px">Оберіть роль</label>
            <span class="custom-dropdown big">

                <select name="role">
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}"
                        {{ $id == $user->role ? ' selected' : '' }}
                        >{{ $role }}</option>
                    @endforeach
                </select>
                        @error('role')
                <div class="text__error__image" style="color: red">{{ $message }}</div>
                @enderror
            </span>

            <div class="hidden">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>

            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Оновити
            </button>
            </div>
        </form>
    </div>


    <!--End-Form-->


</main>
    <!-- MAIN -->
@endsection
