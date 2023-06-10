<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Особистий кабінет</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <script src="{{ asset('js/login.js') }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png">
</head>
<body>

<!-- Контейнер -->
<article class="container">

    <!-- Форма Блоку -->
    <div class="block">

        <section class="block_item block-item">
            <h2 class="block-item_title">Маєте особистий кабінет?</h2>
            <button class="block-item_btn signin-btn">Увійти</button>
        </section>
        <section class="block_item block-item">
            <h2 class="block-item_title">Не маєте особистого кабінету?</h2>
            <button class="block-item_btn signup-btn">Зареєструватися</button>
        </section>

    </div>

    <!-- Форма -->

    <div class="form-box">

        <!-- Форма авторизації -->

        <form class="form form_signin" method="POST" action="{{ route('login') }}" >
            @csrf
            <h2 class="form_title">Авторизація</h2>

            <div class="form-group">

                <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="" class="form-label">Електронна пошта</label>
                <i class="ri-at-line form-icon"></i>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <div class="form-group">
                <input id="password" type="password" class="form-input" name="password" required autocomplete="current-password">
                <label for="" class="form-label">Пароль</label>
                <i class="ri-lock-line form-icon"></i>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <button type="submit" class="btn-submit">Увійти</button>
            <div class="form-group">
                <a href="{{ route('password.request') }}">Забули пароль?</a>
            </div>
        </form>

        <!-- Форма реєстрації -->
        <form class="form form_signup" method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="form_title">Реєстрація</h3>

            <div class="form-group">
                <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required autocomplete="email">
                <label for="name" class="form-label">Електронна пошта</label>
                <i class="ri-at-line form-icon"></i>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <div class="form-group">
                <input id="name" type="text" class="form-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="" class="form-label">Логін</label>
                <i class="ri-user-smile-line form-icon"></i>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <div class="form-group">
                <input id="password" type="password" class="form-input" name="password" required autocomplete="new-password">
                <label for="" class="form-label">Пароль</label>
                <i class="ri-lock-line form-icon"></i>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                <label for="" class="form-label">Підтвердження пароля</label>
                <i class="ri-lock-line form-icon"></i>
            </div>
            <button type="submit" class="btn-submit">Зареєструватися</button>
        </form>




    </div>

</article>
</body>
</html>
