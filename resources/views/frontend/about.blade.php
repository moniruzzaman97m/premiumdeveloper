@extends('layouts.index')

@section( 'content')

<!-- SITE CONTENT -->
<div class="wrapper">
    <section class="titlebar">
        <h1 class="page-title"><span>About </span>us</h1>
        <div id="particles-js"></div>
    </section>

    <hr class="col-md-6 bottom_60">

    <div class="cont">
        <section class="about">
            <!-- ABOUT TEXT -->
            <div class="about-text text-center top_90">



            </div>
            <h2 class="subtitle">Hello! My name is Monir and I am Web Developer.</h2><br>
            <p>Experienced in PHP, Laravel, Vue.js, Node.js, HTML5/CSS3, Bootstrap,
                LESS/SASS, JQuery, JavaScript, SQL/NoSQL, Gulp/Webpack.</p>
             <p>I know how important it is to develop myself and learn new technologies to provide clients with good results.
                My top priority is getting the project finished on time and with high quality code.
                I'm always to bring all my work to perfection. </p>
            <div>
                <h2>My skills include:</h2>
                <ul>
                    <li>Back-end: PHP 5.*, 7.*, Laravel 5.*, Symfony, Yii </li>
                    <li>Front-end: Vue.js, HTML, CSS, Bootstrap, JS, jQuery</li>
                    <li>Databases: SQL, NoSQL, Redis</li>
                    <li>Solid understanding and OOP usage and design patterns</li>
                    <li>Building and integrating RESTful APIs</li>
                    <li>Unit testing</li>
                    <li>Gulp/Webpack</li>
                </ul>
            </div>
            <div>
                <h2>Сertificates:</h2>
                <ul>
                    <li><a href="">html & css</a></li>
                    <li><a href="">PHP & Laravel</a></li>
                    <li><a href="">MySql</a></li>
                    <li><a href="">JavaScript & Java</a></li>
                    <li><a href="">Vue.js</a></li>
                    <li><a href="">AngularJS/D3.js</a></li>
                </ul>
            </div>
            <!-- WORK AREAS -->
            <div class="owl-carousel work-areas text-center top_120 bottom_90 col-md-10 offset-md-1"
                 data-pagination="true" data-autoplay="3000" data-items-desktop="3" data-items-desktop-small="3"
                 data-items-tablet="2" data-items-tablet-small="1">
                <!-- an area -->
                <div class="area col-md-12 item">
                    <i class="flaticon-024-computer-graphic"></i>
                    <h3 class="title" class="title">Web Design</h3>
                    <div class="line"></div>
                    <p>His room, a proper human room although a little too small, lay peacefully between its four
                        familiar walls.</p>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <i class="flaticon-007-stationery"></i>
                    <h3 class="title">Branding Identity</h3>
                    <div class="line"></div>
                    <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly
                        as he looked.</p>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <i class="flaticon-025-graphic-design"></i>
                    <h3 class="title">Illustration</h3>
                    <div class="line"></div>
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found transformed in his bed
                        into.</p>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <i class="flaticon-024-computer-graphic"></i>
                    <h3 class="title" class="title">Laravel Projects</h3>
                    <div class="line"></div>
                    <p>His room, a proper human room although a little too small, lay peacefully between its four
                        familiar walls.</p>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <i class="flaticon-007-stationery"></i>
                    <h3 class="title">Graphic Design</h3>
                    <div class="line"></div>
                    <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly
                        as he looked.</p>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <i class="flaticon-025-graphic-design"></i>
                    <h3 class="title">Php && MySql projects</h3>
                    <div class="line"></div>
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found transformed in his bed
                        into.</p>
                </div>

            </div>

            <!-- WORK AREAS -->
                                <h1>Clients</h1>


            <div class="clients">
                <div class="row">
                    <!-- client -->
                    <div class="col-md-3 col-sm-6 client">
                        <figure>
                            <img src="{{ asset('frontend') }}/images/clients/client-5.jpg">
                        </figure>
                    </div>
                    <!-- client -->
                    <div class="col-md-3 col-sm-6 client">
                        <figure>
                            <img src="{{ asset('frontend') }}/images/clients/client-6.jpg">
                        </figure>
                    </div>
                    <!-- client -->
                    <div class="col-md-3 col-sm-6 client">
                        <figure>
                            <img src="{{ asset('frontend') }}/images/clients/client-7.jpg">
                        </figure>
                    </div>
                    <!-- client -->
                    <div class="col-md-3 col-sm-6 client">
                        <figure>
                            <img src="{{ asset('frontend') }}/images/clients/client-8.jpg">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- cont end -->
</div> <!-- wrapper end -->

@endsection
