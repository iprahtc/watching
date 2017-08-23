<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Watching</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".button-collapse").sideNav();
                $('.parallax').parallax();
                $('.carousel').carousel();
            });
        </script>
    </head>
<body>
    <div class="parallax-container">
        <div class="parallax"><img src="http://bipbap.ru/wp-content/uploads/2017/05/maxresdefault-1.jpg"></div>
        <nav class="white">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo blue-text text-darken-2 notopacity">Logo</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse text-black notopacity"><i class="material-icons blue-text text-darken-2 ">menu</i></a>
                <ul class="right hide-on-med-and-down">{{--
                    <li class="active"><a href="sass.html">Главная</a></li>
                    <li><a href="badges.html">Фильмы</a></li>
                    <li><a href="collapsible.html">Товары</a></li>--}}
                    <li><a class="waves-effect waves-light btn notopacity btncolor">Главная</a></li>
                    <li><a class="waves-effect waves-light btn notopacity btncolor">Фильмы</a></li>
                    <li><a class="waves-effect waves-light btn notopacity btncolor">Товары</a></li>
                    <li><a class="waves-effect waves-light btn notopacity modal-trigger btncolor" href="#modal1">Вход</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="btncolor"><a href="sass.html">Главная</a></li>
                    <li class="btncolor"><a href="badges.html">Фильмы</a></li>
                    <li class="btncolor"><a href="collapsible.html">Товары</a></li>
                    <li class="btncolor"><a class="modal-trigger" href="#modal1">Вход</a></li>
                </ul>
            </div>
        </nav>
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        </div>
    </div>
    <div class="container">
        @yield('content')
        @include('layouts.autorization')
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>