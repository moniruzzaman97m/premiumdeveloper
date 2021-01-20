@extends('layouts.index')

@section( 'content')

<!-- SITE CONTENT -->
<div class="wrapper">
    <section class="home">
        <div id="particles-js"></div>
        <div class="home-content">
            <h1 class="hero-title">Web <br><span>Developer</span></h1>
            <p class="top_45">I know how important it is to develop myself and learn new technologies
                to provide clients with good results. My top priority is getting the project finished on
                time and with high quality code.
                 <br >I'm always to bring all my work to perfection.<br >
                              <span class="element" data-text1="Experience 5+ years."
                                       data-text2="100 + completed projects."
                                        data-text3="More than 100 real reviews on freelance websites and all positive."
                                          data-loop="true" data-backdelay="1500"></span> </p>
            <div class="social">
                <a class="text">social links</a>
                <div class="line"></div>
                <a href="https://www.facebook.com/profile.php?id=100011022071697"><i class="fab fa-facebook"></i> </a>
                <a href="https://twitter.com/moniruzzaman97m"><i class="fab fa-twitter" aria-hidden="true"></i> </a>
                <a href="https://www.instagram.com/monir_uzza_man/"><i class="fab fa-instagram" aria-hidden="true"></i> </a>
                <a href="https://www.linkedin.com/in/moniruzzaman97m/"><i class="fab fa-linkedin" aria-hidden="true"></i> </a>
                <a href="https://dribbble.com/moniruzzaman97m"><i class="fab fa-dribbble" aria-hidden="true"></i> </a>
            </div>
        </div>
    </section>

    <div class="cont">
        <section id="portfolio" class="portfolio">
            <div class="portfolio-filter row">
                <div data-filter=".digital" class="cbp-filter-item">WebDesign</div>
                <div data-filter=".photography" class="cbp-filter-item">Laravel</div>
                <div data-filter=".branding" class="cbp-filter-item">Php</div>
                <div data-filter=".branding" class="cbp-filter-item">Vue.js</div>
                <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">All Work</div>
            </div>
            <div id="grid-container">
                <!-- Item -->
                <div class="cbp-item photography">
                    <a href="portfolio/work-1.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-1.jpg" alt="">
                            <figcaption>
                                <h3>Cosplay</h3>
                                <p>Photography</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item digital">
                    <a href="portfolio/work-2.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-2.jpg" alt="">
                            <figcaption>
                                <h3>Metra Park</h3>
                                <p>Branding </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item digital">
                    <a href="portfolio/work-3.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-3.jpg" alt="">
                            <figcaption>
                                <h3>Socialmedia</h3>
                                <p>Digital </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item branding">
                    <a href="portfolio/work-5.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-4.jpg" alt="">
                            <figcaption>
                                <h3>Vrai Vodka</h3>
                                <p>Branding </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item digital">
                    <a href="portfolio/work-4.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-5.jpg" alt="">
                            <figcaption>
                                <h3>Smart Wallet</h3>
                                <p>Digital </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item branding">
                    <a href="portfolio/work-6.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-6.jpg" alt="">
                            <figcaption>
                                <h3>Motorcycles</h3>
                                <p>Branding </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item branding">
                    <a href="portfolio/work-8.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-7.jpg" alt="">
                            <figcaption>
                                <h3>Racquel Natasha</h3>
                                <p>Branding </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item branding">
                    <a href="portfolio/work-7.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-8.jpg" alt="">
                            <figcaption>
                                <h3>Swacket</h3>
                                <p>Branding </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item branding">
                    <a href="portfolio/work-9.html">
                        <figure class="fig">
                            <img src="{{ asset('frontend') }}/images/work-9.jpg" alt="">
                            <figcaption>
                                <h3>The Gang</h3>
                                <p>Branding </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- load more button -->
            <div id="port-loadMore" class="cbp-l-loadMore-button top_120 bottom_90">
                <a href="port.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                    <span class="cbp-l-loadMore-defaultText">Load More (<span class="cbp-l-loadMore-loadItems">2</span>)</span>
                    <span class="cbp-l-loadMore-loadingText">Loading...</span>
                    <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                </a>
            </div>
        </section>

        <hr class="top_90 bottom_90 col-md-8">

        <section class="widget-twitter top_60">
            <div class="widget-title">
                <h2 class="classic-title">Latest Tweets</h2>
            </div>
            <div class="tweet">
                <ul>
                    <li class="item">12312</li>
                </ul>
            </div>
            <a href="https://twitter.com/envato" target="_blank" class="twitter-account">@envato</a>
        </section>
    </div> <!-- cont end -->
</div> <!-- wrapper end -->
@endsection
