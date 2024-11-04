@php
    use App\Models\Post;
    use App\Models\Tag;
    use \App\Enums\TagEnum;
    $trending = Post::where('status','trending')->get();
    if ($trending->count() > 0) {
         if ($trending->count() >= 5) {
        $trending = $trending->random(5);
        } else {
            $trending = $trending->random($trending->count());
        }
    }

    $posts = Post::orderBy('created_at','desc')->get()->random(3);
    $categories = Tag::get()->random(4);
@endphp
<nav class="menu">
    <div class="container">
        <div class="brand">
            <a href="#">
                <img src="{{asset('asset/images/20230714_154601.png')}}" alt="Odisanflair Logo">
            </a>
        </div>
        <div class="mobile-toggle">
            <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
        </div>
        <div class="mobile-toggle">
            <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
        </div>
        <div id="menu-list">
            <ul class="nav-list">
                <li class="for-tablet nav-title"><a>Menu</a></li>
                <li class="dropdown magz-dropdown magz-dropdown-megamenu">
                    <a href="#">BLOG<i
                            class="ion-ios-arrow-right"></i>
                        <div class="badge">Hot</div>
                    </a>
                    <div class="dropdown-menu megamenu">
                        <div class="megamenu-inner">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="megamenu-title">Trending</h2>
                                        </div>
                                    </div>
                                    <ul class="vertical-menu">
                                        @forelse($trending as $data)
                                            <li><a href="{{url($data->tags->title.'/'.$data->slug)}}"><i
                                                        class="ion-ios-circle-outline"></i> {{Str::limit($data->title,21,'...')}}</a></li>
                                        @empty
                                            <li><a href="#"><i class="ion-ios-circle-outline"></i> No trending post yet.</a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="megamenu-title">Featured Posts</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @foreach($posts as $data)
                                            <article class="article col-md-4 mini">
                                                <div class="inner">
                                                    <figure>
                                                        <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                                            <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                                                        </a>
                                                    </figure>
                                                    <div class="padding">
                                                        <div class="detail">
                                                            <div
                                                                class="time">{{$data->created_at->format('F d, Y')}}</div>
                                                            <div class="category"><a
                                                                    href="{{url('/category/'.$data->tags->title)}}">{{$data->tags->title}}</a>
                                                            </div>
                                                        </div>
                                                        <h2>
                                                            <a href="{{url($data->tags->title.'/'.$data->slug)}}"> {{$data->title}}</a>
                                                        </h2>

                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- PODCAST STARTS -->
                <li><a href="{{route('category_card', "Life's Talk")}}">Life's Talk</a></li>



                <!-- markets starts -->
                <li class="dropdown magz-dropdown">
                    <a href="#">Academy <i class="ion-ios-arrow-right"></i>  <div class="badge">Trading</div></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a style="text-transform: capitalize" href="{{route('category_card', ucwords(TagEnum::FOREX_TRADING->value))}}">
                                {{ucwords(TagEnum::FOREX_TRADING->value)}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category_card', ucwords(TagEnum::CRYPTO_TRADING->value))}}">
                                {{ucwords(TagEnum::CRYPTO_TRADING->value)}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category_card', ucwords(TagEnum::STOCKS_TRADING->value))}}">
                                {{ucwords(TagEnum::STOCKS_TRADING->value)}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category', ucwords(TagEnum::BUSINESS_ACUMEN->value))}}">
                                {{ucwords(TagEnum::BUSINESS_ACUMEN->value)}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category', ucwords(TagEnum::PODCAST->value))}}">
                                {{ucwords(TagEnum::PODCAST->value)}}
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <!-- markets ends -->


                <!-- Mentorship starts -->
                <li><a href="{{route('category_card', "Mentorship")}}">Mentorship</a></li>
                <!-- premium ends -->

                <!-- entertainment start -->
                <li class="dropdown magz-dropdown">
                    <a href="#">Entertainment <i class="ion-ios-arrow-right"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('category_card', "trailers")}}">Movie Trailers</a></li>
                        <li><a href="{{route('category_card', "meme")}}">Meme</a></li>
                        <li><a href="{{route('category_card', "videos")}}">videos</a></li>
                    </ul>
                </li>

                <!-- results starts -->
                <li><a href="{{route('category_card', "Results")}}">Results</a></li>
                <!-- results end -->

                <!-- academy starts -->
                <li><a href="https://t.me/PrecizeTrading">Telegram <div class="badge">Join</div></a></li>
                <!-- academy ends -->

            </ul>
        </div>
    </div>
</nav>
