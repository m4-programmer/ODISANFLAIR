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
    $categories = Tag::get()->random(8);
@endphp
<nav class="menu">
    <div class="container">
        <div class="brand">
            <a href="#">
                <img src="{{asset('asset/images/logo.png')}}" alt="Odisanflair Logo">
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

                @foreach($categories as $data)
                    <li>
                        <a href="{{url('/category/'.$data->title)}}">{{$data->title}} <i class="ion-ios-arrow-right"></i></a>
                    </li>
                @endforeach
                <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Blogs<i
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
            </ul>
        </div>
    </div>
</nav>
