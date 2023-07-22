@php
    use App\Models\Post;use App\Models\Tag;
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
                    <a href="#">Blogs<i
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
                                            <li><a href="{{url($data->tags->title.'/'.$data->title)}}"><i
                                                        class="ion-ios-circle-outline"></i> {{$data->title}}</a></li>
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
{{--                @foreach($categories as $data)--}}
{{--                    <li>--}}
{{--                        <a href="{{url('/category/'.$data->title)}}">{{$data->title}} <i class="ion-ios-arrow-right"></i></a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
                <!-- academy starts -->
                <li><a href="{{url('starter.html')}}">ACADEMY</a></li>
                <!-- academy ends -->

                <!-- PODCAST STARTS -->
                <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">PODCASTS <i class="ion-ios-arrow-right"></i></a>
                    <div class="dropdown-menu megamenu">
                        <div class="megamenu-inner">
                            <div class="row">
                                <div class="col-md-3">
                                    <h2 class="megamenu-title">TRADING</h2>
                                    <ul class="vertical-menu">
                                        <li><a href="{{url('single.html')}}">FOREX</a></li>
                                        <li><a href="{{url('single.html')}}">CRYPTO</a></li>
                                        <li><a href="{{url('single.html')}}">STOCK</a></li>
                                        <li><a href="{{url('single.html')}}">COMMODITY</a></li>
                                        <li><a href="{{url('single.html')}}">OTHERS</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h2 class="megamenu-title">SUCCESS</h2>
                                    <ul class="vertical-menu">
                                        <li><a href="{{url('single.html')}}">FOREX</a></li>
                                        <li><a href="{{url('single.html')}}">CRYPTO</a></li>
                                        <li><a href="{{url('single.html')}}">STOCK</a></li>
                                        <li><a href="{{url('starter.html')}}">COMMODITY</a></li>
                                        <li><a href="{{url('single.html')}}">OTHERS</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h2 class="megamenu-title">BUINESS</h2>
                                    <ul class="vertical-menu">
                                        <li><a href="{{url('single.html')}}">FOREX</a></li>
                                        <li><a href="{{url('single.html')}}">CRYPTO</a></li>
                                        <li><a href="{{url('single.html')}}">STOCK</a></li>
                                        <li><a href="{{url('single.html')}}">COMMODITY</a></li>
                                        <li><a href="{{url('single.html')}}">OTHERS</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h2 class="megamenu-title">RANDOM</h2>
                                    <ul class="vertical-menu">
                                        <li><a href="{{url('single.html')}}">FOREX</a></li>
                                        <li><a href="{{url('single.html')}}">CRYPTO</a></li>
                                        <li><a href="{{url('single.html')}}">STOCK</a></li>
                                        <li><a href="{{url('single.html')}}">COMMODITY</a></li>
                                        <li><a href="{{url('single.html')}}">OTHERS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>



                <!-- books starts -->
                <li class="dropdown magz-dropdown">
                    <a href="category.html">BOOKS <i class="ion-ios-arrow-right"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('single.html')}}">Price Action</a></li>
                        <li><a href="{{url('single.html')}}">Surpport And Resistnace</i></a></li>
                        <li><a href="{{url('single.html')}}">Indicator Trading</a></li>
                        <li><a href="{{url('single.html')}}">Supply And Demand</a></li>
                        <li><a href="{{url('single.html')}}">Chart pattern Trading</a></li>
                        <li><a href="{{url('single.html')}}">Trade Properlly</a></li>
                        <li><a href="{{url('single.html')}}">Psychology Treatment</a></li>
                        <li><a href="{{url('single.html')}}">What Really Works</a>
                        </li>
                    </ul>
                </li>
                <!-- books ends -->


                <!-- Premium starts -->
                <li class="dropdown magz-dropdown">
                    <a href="category.html">PREMIUM <i class="ion-ios-arrow-right"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('single.html')}}">Price Action</a></li>
                        <li><a href="{{url('single.html')}}">Surpport And Resistnace</i></a></li>
                        <li><a href="{{url('single.html')}}">Indicator Trading</a></li>
                        <li><a href="{{url('single.html')}}">Supply And Demand</a></li>
                        <li><a href="{{url('single.html')}}">Chart pattern Trading</a></li>
                        <li><a href="{{url('single.html')}}">Trade Properlly</a></li>
                        <li><a href="{{url('single.html')}}">Psychology Treatment</a></li>
                        <li><a href="{{url('single.html')}}">What Really Works</a>
                        </li>
                    </ul>
                </li>
                <!-- premium ends -->

                <!-- results starts -->
                <li><a href="{{url('single.html')}}">RESULTS</a></li>
                <!-- results end -->

                <!-- about starts -->
                <li><a href="{{url('single.html')}}">ABOUT</a></li>
                <!-- about ends	-->

                <!-- contact starts -->
                <li><a href="{{url('single.html')}}">CONTACT</a></li>
                <!-- contact ends -->

                <!-- academy starts -->
                <li><a href="#">TELEGRAM</a></li>
                <!-- academy ends -->

            </ul>
        </div>
    </div>
</nav>
