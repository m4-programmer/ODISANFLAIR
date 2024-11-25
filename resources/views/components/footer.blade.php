<!-- Start footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Company Info</h1>
                    <div class="block-body">
                        <figure class="foot-logo">
                            <img src="{{asset('asset/images/odin2.jpg')}}" class="img-responsive" alt="Logo">
{{--                            <img src="{{asset('asset/images/20230713_171214.png')}}" class="img-responsive" alt="Logo">--}}
                        </figure>
                        <p class="brand-description">
                            Odisanflair offers an extensive blogging articles, online courses, and best-selling books covering a variety of topics.
                        </p>
                        <a href="{{url('/about')}}" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
                    <div class="block-body">
                        <ul class="tags">
                            @forelse($tags->take(5) as $data)
                                <li><a href="{{url('category/'.$data->title)}}">{{$data->title}}</a></li>
                            @empty
                                <p>No Category</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="block">
                    <h1 class="block-title">Newsletter</h1>
                    <div class="block-body">
                        <p>By subscribing you will receive new articles in your email.</p>
                        <form class="newsletter">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="ion-ios-email-outline"></i>
                                </div>
                                <input type="email" class="form-control email" placeholder="Your mail">
                            </div>
                            <button class="btn btn-primary btn-block white">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Latest News</h1>
                    <div class="block-body">
                        @forelse($latestnews as $data)
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                            <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <p>No news yet</p>
                        @endforelse

                        <a href="{{route('latest' )}}" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="block">
                    <h1 class="block-title">Follow Us</h1>
                    <div class="block-body">
                        <p>Follow us and stay in touch to get the latest news</p>
                        <ul class="social trp">
                            <li>
                                <a href="#" class="facebook">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-twitter-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="youtube">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-youtube-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-instagram-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="block">
                    <div class="block-body no-margin">
                        <ul class="footer-nav-horizontal">
                            <ul class="footer-nav-horizontal">
                                <li><a href="{{url('/')}}">HOME</a></li>
                                <li><a href="{{route('category_card', \Illuminate\Support\Str::slug("LIFE'S TALK"))}}">LIFE'S TALK</a></li>
                            </ul>
                            <ul class="footer-nav-horizontal">
                                <li><a href="{{route('category_card', \Illuminate\Support\Str::slug("ACADEMY"))}}">ACADEMY</a></li>
                                <li><a href="{{url('#')}}">LIBRARY</a></li>
                            </ul>
                            <ul class="footer-nav-horizontal">
                                <li><a href="{{url('contact')}}">CONTACT</a></li>
                                <li><a href="{{url('about')}}">ABOUT</a></li>
                            </ul>
                            <ul class="footer-nav-horizontal">
                                <li><a href="{{url('privacy-policy')}}">PRIVACY POLICY</a></li>
                                <li><a href="{{route('disclaimer')}}">DISCLAIMER</a></li>
                                <li><a href="{{route('scam_alert')}}">SCAM ALERT</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    COPYRIGHT &copy; Odisanflair 2019. ALL RIGHT RESERVED.
                    <div>
                        Made with <i class="ion-heart"></i> by <a href="/">Daniel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
