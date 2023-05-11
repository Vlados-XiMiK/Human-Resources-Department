<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/preloader.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('css/preloader.css') }} " type="text/css"/>
    @yield('links')

    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700,800&display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet" type="text/css"/>
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          type="text/css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png"/>
    @yield('title')
</head>
<body>
<div class="loader"></div>
<div class="wrapper">
    <!--******************************************HEADER***************************************************************-->
    <header class="header">
        <div class="header__container _container">
            <a href="/" class="header__logo">
                <img src="{{ asset('img/logo_transparent.png') }}" class="logo" alt="Logo">
            </a>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="/about" class="menu__link">Про нас</a>
                    </li>
                    <li class="menu__item">
                        <a href="/job" class="menu__link">Вакансії</a>
                    </li>
                    <li class="menu__item">
                        <a href="/contact" class="menu__link">Контакти</a>
                    </li>
                </ul>
                <!--<div class="phone">
                 <a class="num" href=""> +38(095) 123-45-67</a>
                </div>-->
            </nav>
            <nav class="login">
                <a href="/login" class="wave-btn">
                    <span class="wave-btn__text">Особистий кабінет</span>
                    <span class="wave-btn__waves"></span>
                </a>
            </nav>
        </div>
    </header>
    <!--*******************************************MAIN*************************************************************-->
    <main class="page">
        @yield('content')

        <div class="main-block__image _ibg">
            <img src="{{ asset('img/bg.jpg') }}" alt="background">
        </div>
</div>


</main>
<!--******************************************FOOTER*****************************************************************-->
<footer class="footer ">
    <div class="footer__top">
        <div class="footer__container _container">
            <a href="/" class="footer__logo">
                <img src="{{ asset('img/logo_transparent.png') }}" class="logo_footer" alt="Logo">
            </a>
            <nav class="footer__menu menu">
                <ul class="footer-menu__list">
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Політика <br> конфіденційності</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Згода на обробку <br> персональних даних</a>
                    </li>
                    <div class="social-network__bottom">
                        <div class="social_network">
                            <li>
                                <a class="" href="https://www.youtube.com/channel/UC7oozvQhiNTmgrPv5lX63Tg"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a class="" href="https://www.instagram.com/kntu.zvo/?hl=ru"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a class="" href="https://www.facebook.com/kntu.net.ua"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="" href="https://t.me/joinchat/IDDfiBeD0sWi4XaC"><i
                                        class="fab fa-telegram"></i></a>
                            </li>
                        </div>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</footer>
</div>
<script src=" {{ asset('js/form.js') }} "></script>
<script src=" {{ asset('js/upload.js') }} "></script>
</body>
</html>

