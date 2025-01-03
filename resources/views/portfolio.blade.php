<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Som-Daniel</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('asset/css-portfolio/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css-portfolio/styles.css')}}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<!-- page wrap
================================================== -->
<div id="page" class="s-pagewrap">


    <!-- # site header
    ================================================== -->
    <header class="s-header">
        <div class="row s-header__inner">

            <div class="s-header__block">
                <div class="s-header__logo">
                    <a class="logo" href="#">
                        <img src="{{asset('images-portfolio/Logo.png')}}" alt="Homepage">
                    </a>
                </div>

                <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            </div> <!-- end s-header__block -->

            <nav class="s-header__nav">
                <ul class="s-header__menu-links">
                    <li class="current"><a class="smoothscroll" href="#intro">Intro</a></li>
                    <li><a class="smoothscroll" href="#about">About</a></li>
                    <li><a class="smoothscroll" href="#Photos">Photos</a></li>
                    <li><a href="{{route('blog_index')}}">Blog</a></li>
                    <li><a class="smoothscroll" href="#footer">Contact</a></li>
                </ul> <!-- s-header__menu-links -->
            </nav> <!-- end s-header__nav -->

        </div> <!-- end s-header__inner -->
    </header> <!-- end s-header -->


    <!-- # intro
    ================================================== -->
    <section id="intro" class="s-intro target-section">

        <div class="row s-intro__content width-sixteen-col">
            <div class="column lg-12 s-intro__content-inner grid-block grid-16">

                <div class="s-intro__content-text">

                    <div class="s-intro__content-pretitle text-pretitle">Hello</div>
                    <h1 class="s-intro__content-title">
                        I'm Somto Daniel <br>
                        Am a Trader. Entrepreneur. Realist.<br>
                    </h1>

                    <div class="s-intro__content-btns">
                        <a class="smoothscroll btn" href="#about">More About Me</a>
                        <a class="smoothscroll btn btn--stroke" href="#Photos">My Photos</a>
                    </div> <!-- s-intro__content-btns -->

                </div> <!-- s-intro__content-text -->

            </div> <!-- s-intro__content-inner -->
        </div> <!-- s-intro__content -->

        <ul class="s-intro__social social-list">
            <li>
                <a href="https://www.facebook.com/profile.php?id=100085961021900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                    <span class="u-screen-reader-text">Facebook</span>
                </a>
            </li>
            <li>
                <a href="https://x.com/SomtoDanny?t=gI5zsV6BXCbFii6OOQnqQ&s=09">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                    <span class="u-screen-reader-text">Twitter</span>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/somdanniel?igsh=MjZka2NWxuMnB3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                    <span class="u-screen-reader-text">Instagram</span>
                </a>
            </li>
            <!--  -->
        </ul> <!-- end s-intro__social -->

        <div class="s-intro__content-media">
            <img src="{{asset('images-portfolio/MyPhoto.png')}}" alt="">
        </div> <!-- s-intro__content-media -->

        <div class="s-intro__btn-download">
            <a class="btn btn--stroke" href="{{route('blog_index')}}">visit My Blog</a>
        </div> <!-- end s-intro__btn-download -->

        <div class="s-intro__scroll-down">
            <a href="#about" class="smoothscroll">
                <div class="scroll-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></svg>
                </div>
                <span class="scroll-text u-screen-reader-text">Scroll Down</span>
            </a>
        </div> <!-- s-intro__scroll-down -->

    </section> <!-- end s-intro -->


    <!-- # about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row s-about__content">
            <div class="column xl-12">

                <div class="section-header" data-num="01">
                    <h2 class="text-display-title">About Me.</h2>
                </div> <!-- end section-header -->

                <p class="attention-getter">
                    I believe that true success is not just measured in monetary terms, but in the richness
                    of our experiences and the impact we make on the world around us. That's why I approach
                    trading not only as a means to financial gain but also as a journey of personal growth
                    and enlightenment. <br>
                    As a seasoned trader with a profound appreciation for the complexities
                    of both the financial world and the human experience. Over the years, I've honed my
                    skills in navigating the markets while simultaneously embracing the fundamental truths
                    that shape our lives. <br>

                    Also,i leverage my expertise in trading to help individuals and businesses make informed
                    decisions in the ever-changing landscape of finance. But beyond charts and numbers,
                    I bring a deeper understanding of life's realities to the table, offering insights
                    that go beyond mere market analysis.
                </p>

                <p class="attention-getter">
                    I'm not just a market player, I'm a decoder ring for the financial jungle. I take the
                    complex world of finance and break it down into actionable strategies, all with a
                    healthy dose of real-world grit.  Because let's face it, financial decisions impact
                    your life, not just a spreadsheet.
                </p>

                <div class="grid-list-items s-about__blocks">

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Experience</h4>
                        <ul class="s-about__list">
                            <li>
                                Time Management
                                <span>Mastering Moments Trading Time, Living Balance</span>
                            </li>
                            <li>
                                Interpersonal Skills
                                <span>Trading Bonds, Real Connections</span>
                            </li>
                            <li>
                                Risk Assessment
                                <span>Navigate Life's Waves, Real-world Insights</span>
                            </li>
                            <li>
                                Continuous Learning
                                <span>Wisdom: Lifelong Lessons, Lifelong Success</span>
                            </li>
                            <li>
                                Resilience in the Face of Adversity
                                <span>Trade Setbacks for Strength, Real Gains</span>
                            </li>
                            <li>
                                Emotional Resilience
                                <span>Trade Fear for Fortitude Real Grit, Real Growth</span>
                            </li>
                        </ul>
                    </div> <!--end s-about__block -->

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Awards</h4>

                        <ul class="s-about__list">
                            <li>
                                <a href="#0">
                                    Risk Administration Excellence
                                    <span>Alpha Traders Syndicate — 2018</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    Educator of the Year
                                    <span>Cryptic Capital Consortium— 2020</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    Innovator Award
                                    <span>Stealth Traders Alliance — 2021</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    TER of The Month
                                    <span>TER — 2022</span>
                                </a>
                            </li><li>
                                <a href="#0">
                                    Market Mastery Award
                                    <span>Quantitative Trading Institute — 2023</span>
                                </a>
                            </li>
                        </ul>
                    </div> <!--end s-about__block -->

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Skills</h4>

                        <ul class="s-about__list">
                            <li>
                                Calculated Moves
                            </li>
                            <li>
                                Mastering Your Mind
                            </li>
                            <li>
                                Emotional Control
                            </li>
                            <li>
                                Risk Management
                            </li>
                            <li>
                                Patience and Discipline
                            </li>
                            <li>
                                Financial Literacy
                            </li>
                        </ul>
                    </div> <!--end s-about__block -->

                </div> <!-- grid-list-items -->

            </div> <!--end column -->
        </div> <!--end s-about__content -->

    </section> <!-- end s-about -->





    <!-- # works
    ================================================== -->
    <section id="Photos" class="s-works target-section">

        <div class="row">
            <div class="column xl-12">
                <div class="section-header" data-num="02">
                    <h2 class="text-display-title">Prefered Quotes.</h2>
                </div> <!-- end section-header -->
            </div>
        </div>

        <div class="row folio-entries">
            @foreach($quotes as $data)
                <div class="column entry">
                <a href="{{asset("{$data->href}")}}" class="entry__link glightbox" data-glightbox="title: {{$data->h4}}; description: .entry__desc-01">
                    <div class="entry__thumb">
                        <img src="{{asset("{$data->img}")}}"  alt="{{$data->h4}}" style="width: 100%">
                    </div>
                    <div class="entry__info">
                        <h4 class="entry__title">{{$data->h4}}</h4>
                        <div class="entry__cat">{{$data->sub}}</div>
                    </div>
                </a>

                <div class="glightbox-desc entry__desc-01">
                    <p>
                        {{$data->p}}
                        <a href="https://x.com/SomtoDanny?t=gI5zsV6BXCbFii6OOQnqQ&s=09">GET MORE</a>.
                    </p>
                </div>
            </div> <!-- entry -->
            @endforeach
        </div> <!-- folio entries -->

        <!-- pulled testifier and block quotes section -->
        <div class="row">

            <div class="column xl-6 md-12">

                <h3 class="u-add-bottom">Pulled Testifier</h3>

                <p>
                    Life is a complex journey filled with moments of joy, sorrow,
                    growth, and discovery. It's a tapestry woven with threads of
                    relationships, experiences, and challenges, ultimately leading
                    to a deeper understanding of oneself and the world.
                </p>

                <figure class="pull-quote">
                    <blockquote>
                        <p>
                            Danny as transformed my life in ways I never thought possible.
                            Through their guidance, I've discovered a deeper understanding
                            of myself and my purpose. Their approach is both compassionate
                            and insightful, and their belief in my potential has been
                            instrumental in my personal growth. I am eternally grateful
                            for their unwavering support.
                        </p>

                        <footer>
                            <cite>Judah Smith</cite>
                        </footer>
                    </blockquote>
                </figure>


            </div>

            <div class="column xl-6 md-12">

                <h3 class="h-add-bottom">Block Quotes</h3>

                <blockquote cite="http://where-i-got-my-info-from.com">
                    <p>
                        Life, is a sacred pilgrimage marked by challenges,
                        triumphs, and divine purpose. It is a journey of
                        growth, faith, and love, ultimately leading to
                        eternal communion with the Divine.
                    </p>

                    <footer>
                        <cite>
                            <a href="#0">Daniel Andy</a>
                        </cite>
                    </footer>

                </blockquote>

                <blockquote>
                    <p>There is a God-shaped vacuum in the heart of each man which cannot be satisfied
                        by any created thing but only by God the Creator.</p>

                    <footer>
                        <cite>Blaise Pascal</cite>
                    </footer>

                </blockquote>

            </div>

        </div> <!-- end row -->


        <div class="row s-testimonials">
            <div class="column xl-12">

                <h3 class="s-testimonials__header">Hear it from My Happy Clients</h3>

                <div class="swiper-container s-testimonials__slider">

                    <div class="swiper-wrapper">

                        <div class="s-testimonials__slide swiper-slide">
                            <div class="s-testimonials__author">
                                <img src="{{asset('images-portfolio/avatars/testimonials-5.jpg')}}" alt="Author image" class="s-testimonials__avatar">
                                <cite class="s-testimonials__cite">
                                    <strong>John Wilfred</strong>
                                    <span>Alpha capitals</span>
                                </cite>
                            </div>
                            <p>
                                As the proverb says, 'Iron sharpens iron, and one person sharpens another.'
                                Som-Danny meticulously shares every aspect of his PA strategy, ensuring no
                                detail is overlooked. His patience and persistence are exceptional, setting
                                him apart by effectively bringing each student up to speed. I am confident
                                that his straightforward strategy will maximize your ROI and minimize your
                                losses through effective money management..
                            </p>
                        </div> <!-- end s-testimonials__slide -->

                        <div class="s-testimonials__slide swiper-slide">
                            <div class="s-testimonials__author">
                                <img src="{{asset('images-portfolio/avatars/top-banner-author.jpg')}}" alt="Author image" class="s-testimonials__avatar">
                                <cite class="s-testimonials__cite">
                                    <strong>matt Walker</strong>
                                    <span>Carnegie Steel Co.</span>
                                </cite>
                            </div>
                            <p>
                                "I have been trading in FOREX, Futures, Stocks, and Commodities for almost five years.
                                Despite gaining substantial knowledge, I struggled with consistency. Danny’s free articles
                                and mentorship program gave me invaluable insights. Thanks to his guidance, I'm now
                                experiencing consistent profitability and am close to becoming a full-time trader.
                                I'm incredibly grateful. Keep up the fantastic work!
                            </p>
                        </div> <!-- end s-testimonials__slide -->

                        <div class="s-testimonials__slide swiper-slide">
                            <div class="s-testimonials__author">
                                <img src="{{asset('images-portfolio/avatars/author_image.png')}}" alt="Author image" class="s-testimonials__avatar">
                                <cite class="s-testimonials__cite">
                                    <strong>Rick Quinn</strong>
                                    <span>Student</span>
                                </cite>
                            </div>
                            <p>
                                Som-Danny helped me get my start in Forex a little over a year ago. Thanks to the foundation
                                he helped me to build, today, I'm going strong. Closed 15/16 winners this week for 1,144 pips
                                (so far). With a lot of hacks and frauds in these markets, Danny is the Real Deal. Hey, my
                                friend! I just wanted to give you a shout out and say 'Thank you
                            </p>
                        </div> <!-- end s-testimonials__slide -->

                        <div class="s-testimonials__slide swiper-slide">
                            <div class="s-testimonials__author">
                                <img src="{{asset('images-portfolio/avatars/user-06.jpg')}}" alt="Author image" class="s-testimonials__avatar">
                                <cite class="s-testimonials__cite">
                                    <strong>Henry Reid</strong>
                                    <span>Quantitative Trading Institute</span>
                                </cite>
                            </div>
                            <p>
                                "Hey Som-D, I just want to thank you for your amazing work in traders' education.
                                The knowledge you share is invaluable, far surpassing what most beginners to advanced
                                traders receive from your mentorship. I've spent thousands on education and mentorship,
                                but what you offer is honest, transparent, and accurate, and it's free! I've learned
                                so much about trend trading from your contents. Thanks, mate! Cheers! 🙌"🙌🙌🙌🙌"
                            </p>
                        </div> <!-- end s-testimonials__slide -->

                    </div> <!-- end swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div> <!-- end swiper-container -->

            </div> <!-- end column -->
        </div> <!-- end s-testimonials -->

    </section> <!-- end s-works -->


    <!-- # numbers
    ================================================== -->
    <section id="numbers" class="s-numbers">

        <div class="row counter-items">

            <div class="column counter-items__item">
                <div class="num">
                    80
                    <span>+</span>
                </div>
                <h5>Happy Clients</h5>
                <p>
                    Happy clients are benefitting from my exceptional trading expertise and
                    practical life insights. They enjoy increased financial stability,
                    innovative investment strategies, and personalized financial education,
                    leading to their continued growth and success.
                </p>
            </div> <!-- end counter-items__item -->

            <div class="column counter-items__item">
                <div class="num">
                    120
                    <span>+</span>
                </div>
                <h5>Webinar & seminar</h5>
                <p>
                    I have conducted numerous webinars and seminars, sharing my expertise in trading and
                    practical financial strategies. These sessions have empowered many individuals with
                    valuable insights and skills for achieving financial success.
                </p>
            </div> <!-- end counter-items__item -->

            <div class="column counter-items__item">
                <div class="num">
                    23k
                    <span>+</span>
                </div>
                <h5>Social media followers</h5>
                <p>
                    My voice isn't limited to one corner of the internet. It connects with a passionate
                    community of thousands across social media.
                </p>
            </div> <!-- end counter-items__item -->

            <div class="column counter-items__item">
                <div class="num">
                    85
                    <span>+</span>
                </div>
                <h5>Positive Feedback</h5>
                <p>
                    Alot positive feedback highlighting exceptional trading expertise and personalized
                    guidance. Visit our website to see why their trust keeps piling up.
                </p>
            </div> <!-- end counter-items__item -->

        </div>  <!-- end counter-items -->


        <!--  -->
        <div class="row">

            <div class="column xl-6 md-12">

                <h3 class="u-add-bottom">Write me</h3>

                <form>
                    <div>
                        <label for="sampleInput">Your email</label>
                        <input class="u-fullwidth" type="email" placeholder="test@mailbox.com" id="sampleInput">
                    </div>
                    <div>
                        <label for="sampleRecipientInput">Reason for contacting</label>
                        <div class="ss-custom-select">
                            <select class="u-fullwidth" id="sampleRecipientInput">
                                <option value="Option 1">Questions</option>
                                <option value="Option 2">Report</option>
                                <option value="Option 3">Others</option>
                            </select>
                        </div>
                    </div>

                    <label for="exampleMessage">Message</label>
                    <textarea class="u-fullwidth" placeholder="Your message" id="exampleMessage"></textarea>

                    <label class="u-add-bottom">
                        <input type="checkbox">
                        <span class="label-text">Send a copy to yourself</span>
                    </label>

                    <input class="btn--primary u-fullwidth" type="submit" value="Submit">
                </form>

            </div>

            <div class="column xl-6 md-12">

                <h3>Please Note</h3>

                <div>
                    <h6>For media and speaking inquiries: </h6>
                    <p>Email <a href="sodisanflair@gmail.com.">sodisanflair@gmail.com.</a> In your email please include a
                        description of the event, date, budget and expected audience size.</p>

                    <h6>Questions for me & support: </h6>
                    <p>If you’d like to share your success story or have questions about purchasing a
                        course, billing, or course access, please send an email to: <a href="sodisanflair@gmail.com.">sodisanflair@gmail.com.</a></p>

                    <p>Anything else, do not hesitate to drop me a line.</p>
                </div><!-- end contact -->

                <hr class="fancy">

            </div>

        </div>
        <!--  -->

        <hr class="fancy">
    </section> <!-- end s-numbers -->


    <!-- # footer
    ================================================== -->
    <footer id="footer" class="s-footer target-section">

        <div class="row">
            <div class="column lg-12">
                <div class="section-header light-on-dark" data-num="03">
                    <h2 class="text-display-title">Get In Touch.</h2>
                </div> <!-- end section-header -->
            </div>
        </div>

        <div class="row s-footer__content">

            <div class="column xl-6 md-12 s-footer__block s-footer__about">
                <p class="attention-getter">
                    The financial markets are a constantly evolving landscape, shaped by the
                    collective wisdom and insights of its participants. My approach goes beyond
                    individual analysis; it's about fostering a passionate community where we can
                    share perspectives and navigate the markets together. You can keep in touch.
                </p>
            </div> <!-- end section-footer__about -->

            <div class="column xl-6 md-12 s-footer__block s-footer__site-links">
                <div class="row">
                    <div class="column xl-4 lg-5 md-6 tab-12">
                        <h5>Follow Me</h5>
                        <ul class="link-list">
                            <li><a href="https://www.facebook.com/profile.php?id=100085961021900">Facebook</a></li>
                            <li><a href="https://x.com/SomtoDanny?t=gI5zsV6BXCbFii6OOQnqQ&s=09">Twitter</a></li>
                            <li><a href="https//www.instagram.com/odisanflair?igsh=bnVrdzQ5cDIsN2Jn">Instagram</a></li>
                            <li><a href="https://www.tiktok.com/@somdy360?_r=1&_d=e55bc68fbjb35d&sec_uid=MS4wLjABAAAA2gsYRJjmTxW28fQ41iNCIdVSbioinU7cjKnZ_vH_DCSXEkrEcCz7EI6Xvz1Yi21M&share_author_id=7033116085951972357&sharer_language=en&source=h5_m&u_code=dlla74m9jdcmgk&timestamp=1718379839&user_id=7033116085951972357&sec_user_id=MS4wLjABAAAA2gsYRJjmTxW28fQ41iNCIdVSbioinU7cjKnZ_vH_DCSXEkrEcCz7EI6Xvz1Yi21M&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7377794472166246149&share_link_id=2e500a28-7035-4aa2-b4fb-42350f35a3a4&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb0229&social_share_type=5&enable_checksum=1">TikTok</a></li>
                            <li><a href="https://t.me/OdisanFlairh">Telegram</a></li>
                            <li><a href="#0">Youtube</a></li>
                        </ul>
                    </div>
                    <div class="column xl-6 md-6 tab-12">
                        <h5>Contact Me</h5>
                        <ul class="link-list">
                            <li><a href="sodisanflair@gmail.com">SODISANFLAIR@GMAIL.COM</a></li>
                            <li><a href="tel:+2349034692024">+234 90 3469 2024</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end section-footer__site-links -->

        </div> <!-- end section-footer__content -->


        <div class="row s-footer__buttons">

            <div class="column xl-6 tab-12">
                <a href="mailto:#0" class="btn btn--primary btn--large u-fullwidth">Message Me</a>
            </div>

            <div class="column xl-6 tab-12">
                <a href="{{route('blog_index')}}" class="btn btn--stroke btn--large u-fullwidth">VISIT MY BLOG</a>
            </div>

        </div> <!-- end section-footer__buttons -->

        <div class="row s-footer__bottom">

            <div class="column xl-6 lg-12">
                <ul class="s-footer__social social-list">
                    <li>
                        <a href="https://www.facebook.com/IamOzonnaya?mibextid=ZbWKwL">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                            <span class="u-screen-reader-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/SomtoDanny?s=09">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                            <span class="u-screen-reader-text">Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                            <span class="u-screen-reader-text">Instagram</span>
                        </a>
                    </li>
                </ul>
            </div> <!-- end section-footer__social -->

            <div class="column xl-6 lg-12">
                <p class="ss-copyright">
                    <span>© Copyright Somto Daniel</span>
                    <span>Design by <a href="#0">OkAndy</a></span>
                </p>
            </div>

        </div> <!-- end section-footer__bottom -->

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>
            </a>
            <span>Back To Top</span>
        </div> <!-- end ss-go-top -->

    </footer> <!-- end s-footer -->

</div> <!-- end page-wrap -->


<!-- Java Script
================================================== -->
<script src="{{asset('asset/js-portfolio/plugins.js')}}"></script>
<script src="{{asset('asset/js-portfolio/main.js')}}"></script>

</body>
</html>
