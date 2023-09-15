<x-layout body="skin-orange">
    <style>
        .article-title {
        max-height: 3.8em; /* Adjust the max height as needed */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    </style>
    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <x-headlines />
                    <x-featured-post :featured="$firstFivePosts" />
                    <div class="line">
                        <div>Latest News</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <x-latest-news :latestnews="$latestPosts" />
                        </div>
                    </div>
                    {{--Advertisement--}}
                    <div class="banner">
                        <a href="#">
                            <img src="{{asset('asset/images/ads.png')}}" alt="Sample Article">
                        </a>
                    </div>
                    {{--End of Advertisement--}}
                    <div class="line transparent little"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 trending-tags">
                            <h1 class="title-col">Trending Tags</h1>
                            <div class="body-col">
                                <x-trending-tags :tags="$tags" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h1 class="title-col">
                                Hot News
                                <div class="carousel-nav" id="hot-news-nav">
                                    <div class="prev">
                                        <i class="ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="next">
                                        <i class="ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                            </h1>
                            <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
                                <x-hot-news :hotnews="$firstFivePosts" />
                            </div>
                        </div>
                    </div>
                    <div class="line top">
                        <div>Just Another News</div>
                    </div>
                    <div class="row">
                       <x-another-news :news="$firstFivePosts" />
                    </div>
                    <section class="best-of-the-week">
                        <div class="container">
                            <h1><div class="text">Best Of The Week</div>
                                <div class="carousel-nav" id="best-of-the-week-nav">
                                    <div class="prev">
                                        <i class="ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="next">
                                        <i class="ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                            </h1>
                            <div class="owl-carousel owl-theme carousel-1">
                                @foreach($posts->take(6) as $data)
                                <article class="article">
                                    <div class="inner">
                                        <figure>
                                            <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                                <img src="{{asset($data->cover)}}" alt="{{$data->title}}" style="height:300px!important;background-size:contain!important">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <div class="detail">
                                                <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                                                <div class="category">
                                                    <a href="{{url('/category/'.$data->tags->slug)}}">{{$data->tags->title}}</a>
                                                </div>
                                            </div>
                                            <h2 class="article-title"><a href="{{url($data->tags->title.'/'.$data->slug)}}"> {{$data->title}}</a></h2>
                                            <p>
                                                {!! Str::limit(implode(' ', array_slice(explode(' ', strip_tags($data->post)), 0, 50)),50,'...' )!!}    
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <x-side-bar :recommended="$recommended" :comments="$comments"  :author="$author" :popular="$popular" />
            </div>
        </div>
    </section>
</x-layout>
