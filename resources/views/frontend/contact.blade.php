    @extends('layouts.index')

    @section( 'content')
    <!-- SITE CONTENT -->
    <div class="wrapper">
        <section class="titlebar">
            <h1 class="page-title"><span>Contact </span>us</h1>
            <div id="particles-js"></div>
        </section>

        <hr class="col-md-6 bottom_60">

        <div class="cont">
            <span><a href="{{ route('home') }}">Home</a>->contact</span>
            <section class="contact col-md-8 offset-md-2 top_90">

                <div class="contact-info text-center">
                    <p>Bangladesh, Dhaka, Uttara, Sector-4</p>
                    <a href="mailto:moniruzzaman9m@gmail.com">E-mail: moniruzzaman97m</a><br>
                    <a href="mailto:moniruzzaman97m">Skype: moniruzzaman97m</a>
                </div>
                <div class="contact-form top_90">
                    <form class="row" action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <input class="inp" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input class="inp" type="text" name="email"  placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Your Message" rows="6" name="message" class="col-md-12 form-message"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div id="success">@include('alert.messages')</div>
                            <input type="submit" value="Submit" class="site-btn2">
                        </div>
                    </form>
                </div>


            </section>

        </div> <!-- cont end -->
    </div> <!-- wrapper end -->

    @endsection
