<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Watching</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".button-collapse").sideNav();
            });
        </script>
    </head>
<body>
<div>
    <nav class="white">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo blue-text text-darken-2">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse text-black"><i class="material-icons blue-text text-darken-2">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
    </nav>
</div>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>