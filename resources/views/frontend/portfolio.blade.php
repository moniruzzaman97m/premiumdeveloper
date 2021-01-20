@extends('layouts.index')

@section( 'content')

<!-- SITE CONTENT -->
<div class="wrapper">

    <div class="cont">
        <section class="news-article top_90">
            <article>
                <figure class="article-image bottom_30">
                    <img src="{{ asset('frontend') }}/images/blog-article.jpg" alt="">
                </figure>
                <small class="category">Photography</small>
                <h1 class="title">Perfect pastels: Why India's 'Pink City' is a photographer's paradise </h1>
                <div class="information bottom_30">George Michael, <span>March 2, 2018</span></div>
                <p>Obituary writing is more about life than death: the last word, a testament to a human
                    contribution.Yet who gets remembered — and how — inherently involves judgment. To look back at the
                    obituary archives can, therefore, be a stark lesson in how society valued various achievements and
                    achievers.Since 1851, The New York Times has published thousands of obituaries: of heads of state,
                    opera singers, the inventor of Stove Top stuffing and the namer of the Slinky. The vast majority
                    chronicled the lives of men, mostly white ones; even in the last two years, just over one in five of
                    our subjects were female.</p>
                <p><b>Charlotte Brontë</b> wrote “Jane Eyre”; Emily Warren Roebling oversaw construction of the Brooklyn
                    Bridge when her husband fell ill; Madhubala transfixed Bollywood; Ida B. Wells campaigned against
                    lynching. Yet all of their deaths went unremarked in our pages, until now.Below you’ll find
                    obituaries for these and others who left indelible marks but were nonetheless overlooked. We’ll be
                    adding to this collection each week, as Overlooked becomes a regular feature in the obituaries
                    section, and expanding our lens beyond women.</p>
                <div class="row article-lightbox top_60 bottom_60">
                    <figure class="col-md-6"><img src="{{ asset('frontend') }}/images/article-image.jpg"></figure>
                    <figure class="col-md-6"><img src="{{ asset('frontend') }}/images/article-image-2.jpg"></figure>
                </div>
                <p>Trading in glass skyscrapers for century-old royal palaces and historic forts, the pair who have
                    130,000 Instagram followers between them said that the images they captured in Jaipur received an
                    unprecedented response online. "The response [to our photographs of Jaipur] has been amazing, almost
                    ridiculous," Cheng said. For the photographers, one of the city's most intriguing traits is the
                    pastel pink coloring of its buildings. "The first gates you see when you enter are pink," said Wong.
                    "Once you're through, everything around you varies in different shades of the color -- from bright
                    pinks to reddish browns."
                    One pink palace proved especially popular on social media.</p>
                <blockquote class="col-md-8 offset-md-2 top_60 bottom_60">Some of the California 'sanctuary' laws
                    targeted by feds could be vulnerable, legal experts say
                </blockquote>
                <p>That immediately brought to mind one of my fondest memories, involving my daughter when she was just
                    a toddler of one: taking her with me on the short walk to check the mail. I live in a small enclave
                    of homes in which all the mailboxes are together in a central location, less than a minute’s walk
                    from my front door…when I walk alone, that is. When I would take my daughter with me it was easily
                    20 minutes. Everything along the way, to and from, fascinated her: every pebble, ant, stick, leaf,
                    blade of grass, and crack in the sidewalk was something to be picked up, looked at, tasted, smelled,
                    and shaken. Everything was interesting to her. She knew nothing. I knew everything… been there, done
                    that. She was in the moment, I was in the past. She was mindful. I was mindless.</p>
            </article>

            <!-- COMMENTS -->
            <div class="article-comments top_120">
                <h2 class="subtitle">Post Comments</h2>
                <!-- a comment -->
                <div class="comment row top_60">
                    <figure class="col-md-2">
                        <img src="{{ asset('frontend') }}/images/comment-1.jpg" alt="">
                    </figure>
                    <div class="comment-content col-md-10">
                        <h3 class="title top_15">Mary R. Peterson</h3>
                        <span class="date">March 2, 2018</span>
                        <p>He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the
                            floundering legs, and only stopped when he began to feel a mild, dull pain there. </p>
                        <a href="#" class="reply">Reply</a>
                    </div>
                </div>
                <!-- a comment -->
                <div class="comment reply row top_45">
                    <figure class="col-md-2">
                        <img src="{{ asset('frontend') }}/images/comment-2.jpg" alt="">
                    </figure>
                    <div class="comment-content col-md-10">
                        <h3 class="title top_15">Charles A. Bullock</h3>
                        <span class="date">March 19, 2018</span>
                        <p>He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the
                            floundering legs, and only stopped when he began to feel a mild, dull pain there. </p>
                        <a href="#" class="reply">Reply</a>
                    </div>
                </div>
                <!-- a comment -->
                <div class="comment row top_45">
                    <figure class="col-md-2">
                        <img src="{{ asset('frontend') }}/images/comment-3.jpg" alt="">
                    </figure>
                    <div class="comment-content col-md-10">
                        <h3 class="title top_15">Geoffrey B. Ashley</h3>
                        <span class="date">February 5, 2018</span>
                        <p>He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the
                            floundering legs, and only stopped when he began to feel a mild, dull pain there. </p>
                        <a href="#" class="reply">Reply</a>
                    </div>
                </div>
            </div>

            <!-- LEAVE A COMMENT -->
            <div class="leave-reply top_90">
                <h2 class="subtitle bottom_45">Leave a Reply</h2>
                <form class="row">
                    <div class="col-md-4">
                        <input class="inp" type="text" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <input class="inp" type="text" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <input class="inp" type="text" placeholder="Website">
                    </div>
                    <div class="col-md-12">
                        <textarea placeholder="Your Comment" rows="8" class="col-md-12 form-message"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" value="Submit" class="site-btn2">
                    </div>
                </form>
            </div>

        </section>

    </div> <!-- cont end -->
</div> <!-- wrapper end -->
@endsection
