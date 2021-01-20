<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gorge Portfolio Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Gorge Portfolio Template">
    <meta name="keywords" content="personal, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('frontend') }}/cubeportfolio/css/cubeportfolio.min.css"/>
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/colors/red.css"/>
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css"/>

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/fontawesome/css/all.css"/>

</head>
<body>
<!-- PRELOADER -->
<div class="preloader">
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
</div>

<!-- HEADER -->
<header>
    <img src="{{ asset('frontend') }}/images/logo2.png" alt="Профессиональная разработка сайтов - yarmat.su">
    <div class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<!-- FULL MENU -->
<div class="full-menu">
    <div class="full-inner row">
        <nav class="col-md-8">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">Abouts </a></li>
                <li><a href="{{ route('portfolio') }}">portfolio</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contacts</a></li>
            </ul>
        </nav>
        <div class="col-md-4 full-contact">
            <ul>
                <li class="title">Monir Uzzaman</li>
                <li><a href="mailto:moniruzzaman97m@gmail.com">Email: moniruzzaman97m</a></li>
                <li>
                    <div class="social">
                        <a href="https://www.facebook.com/profile.php?id=100011022071697"><i class="fab fa-facebook"></i> </a>
                <a href="https://twitter.com/moniruzzaman97m"><i class="fab fa-twitter" aria-hidden="true"></i> </a>
                <a href="https://www.instagram.com/monir_uzza_man/"><i class="fab fa-instagram" aria-hidden="true"></i> </a>
                <a href="https://www.linkedin.com/in/moniruzzaman97m/"><i class="fab fa-linkedin" aria-hidden="true"></i> </a>
                <a href="https://dribbble.com/moniruzzaman97m"><i class="fab fa-dribbble" aria-hidden="true"></i> </a>
            </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@yield('content')
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-7d4daccc-7f91-49ea-84fb-fb53546acb9c"></div>
<footer>
    <div class="cont">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 copyright">
                <img src="{{ asset('frontend') }}/images/logo2.png" alt="">
                <p>© 2021 Gorge Creative PMZ</p>
            </div>
            <div class="col-md-4 d-sm-none d-md-block">
                <div class="social">
                    <a href="https://www.facebook.com/profile.php?id=100011022071697"><i class="fab fa-facebook"></i> </a>
                    <a href="https://twitter.com/moniruzzaman97m"><i class="fab fa-twitter" aria-hidden="true"></i> </a>
                    <a href="https://www.instagram.com/monir_uzza_man/"><i class="fab fa-instagram" aria-hidden="true"></i> </a>
                    <a href="https://www.linkedin.com/in/moniruzzaman97m/"><i class="fab fa-linkedin" aria-hidden="true"></i> </a>
                    <a href="https://dribbble.com/moniruzzaman97m"><i class="fab fa-dribbble" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 d-none d-sm-block getintouch">
                <a href="#">
                    <strong>Get In Touch</strong><br>
                    <p> <a href="mailto:premiumdeveloperszone@gmail.com">Email: premiumdeveloperszone</a></p>
                    <p> <a href="mailto:moniruzzaman97m@gmail.com">Email: moniruzzaman97m</a></p>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Javascripts -->
<script src="{{ asset('frontend') }}/js/jquery-2.1.4.min.js"></script>
<script src="{{ asset('frontend') }}/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="{{ asset('frontend') }}/js/typed.js"></script>
<script src="{{ asset('frontend') }}/js/particles.js"></script>
<script src="{{ asset('frontend') }}/js/app.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.hover3d.js"></script>
<script src="{{ asset('frontend') }}/js/main.js"></script>

</body>
</html>
