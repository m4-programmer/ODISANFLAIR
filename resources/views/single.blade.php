<x-layout >
    <style>
            /* .row {
            display: flex;
        }

        .sidebar {
            width: 35%;
            background-color: #f0f0f0;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            overflow-y: auto;
            padding: 20px;
            margin-top: 100px!important;
            padding-top: 100px;
        } */

        /* .content {
            width: 65%; */
            /* margin-left: 35%; Width of the sidebar */
            /* padding: 20px;
            box-sizing: border-box;
        } */

        /* footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        } */
    </style>
    <style>
        .article-title {
            max-height: 3.8em; /* Adjust the max height as needed */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .article-description {
            /* Style for the description, if needed */
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000; /* Optional: To show a black background before video loads */
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>

    @section('meta_title'){{ $post->title }}@stop

    @section('meta_description'){!! Str::limit(implode(' ', array_slice(explode(' ', strip_tags($data->post)), 0, 50)), 150, '...' )!!}@stop

    @section('meta_image'){{ asset($post?->cover) }}@stop

    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sidebar" id="sidebar">
                    <aside>
                        <div class="aside-body">
                            <figure class="ads">
                                <img src="{{asset('asset/images/ad.png')}}">
                                <figcaption>Advertisement</figcaption>
                            </figure>
                        </div>
                    </aside>
                    <aside>
                        <h1 class="aside-title">Recent Post</h1>
                        <div class="aside-body">
                            <article class="article-fw">
                                @foreach($recommended->random(1) as $data)
                                    <div class="inner">
                                        <figure>
                                            <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                                <img src="{{asset($data->cover)}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <div class="detail">
                                                <div class="time">{{$data->created_at->format("F d, Y")}}</div>
                                                <div class="category"><a href="{{url('category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                                            </div>
                                            <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                                            <p>{!! Str::limit($data->post, 200,'...') !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </article>
                            <div class="line"></div>
                            @foreach($recommended as $data)
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                                <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="{{url('category'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                                                <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </aside>
                    <x-navs.sidebar-newsletter />
                </div>
                <div class="col-md-8 content">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">{{$tag}}</li>
                    </ol>
                    <article class="article main-article">
                        <header>
                            <h1>{{$post->title}}</h1>
                            <ul class="details">
                                <li>Posted on {{$post->created_at->format("d F, Y")}}</li>
                                <li><a>{{$tag}}</a></li>
                                <li>By <a href="#">{{$post->user->name}}</a></li>
                            </ul>
                        </header>
                        <div class="main">


                            <div class="featured">
                                @if($post->media)
                                    <div class="video-container">
                                        {!! $post->media->url !!}
                                    </div>
                                @else
                                    <figure>
                                        <img src="{{asset($post->cover)}}">

                                    </figure>
                                @endif
                            </div>


                                {!! $post->post !!}


                        </div>
                        <footer>
                            <div class="col">
                                <ul class="tags">
                                    @foreach ($tags as $tag )
                                        <li><a href="{{route('category', $tag->slug)}}" class="uppercase">{{$tag->title}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="col">
                                <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$post->likes}}</div></a>
                            </div>
                        </footer>
                    </article>
                    <div class="sharing">
                        <div class="title"><i class="ion-android-share-alt"></i> Sharing is caring</div>
                        <ul class="social">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="ion-social-facebook"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="ion-social-twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#" class="googleplus">
                                    <i class="ion-social-googleplus"></i> Google+
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="ion-social-linkedin"></i> Linkedin
                                </a>
                            </li>
                            <li>
                                <a href="#" class="skype">
                                    <i class="ion-ios-email-outline"></i> Email
                                </a>
                            </li>
                            <li class="count">
                                20
                                <div>Shares</div>
                            </li>
                        </ul>
                    </div>
                    <div class="line">
                        <div>Author</div>
                    </div>
                    <div class="author">
                        <figure>
                            <img src="{{asset('asset/images/Piture7.png')}}">
                        </figure>
                        <div class="details">
                            <div class="job">{{"REALIST"}}</div>
                            <h3 class="name">{{"Daniel Som"}}</h3>
                            <p>When you look in the eyes of grace, when you meet grace,
                                when you embrace grace, when you see the nail prints
                                in grace’s hands and the fire in his eyes, when you feel
                                His relentless love for you - it will not motivate you to sin.
                                It will motivate you to righteousness.</p>
                            <ul class="social trp sm">
                                <li>
                                    <a href="#" class="facebook">
                                        <svg><rect/></svg>
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <svg><rect/></svg>
                                        <i class="ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="youtube">
                                        <svg><rect/></svg>
                                        <i class="ion-social-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="googleplus">
                                        <svg><rect/></svg>
                                        <i class="ion-social-googleplus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="line"><div>You May Also Like</div></div>
                    <div class="row">
                        @foreach($recommended->random(2) as $data)
                        <article class="article related col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <figure>
                                    <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                        <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h2><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h2>
                                    <div class="detail">
                                        <div class="category"><a href="{{url('category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                                        <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    <div class="line thin"></div>
                    <div class="comments">
                        <form class="row" action="{{url($tag.'/'.$title)}}" method="post">
                            @csrf
                            <div class="col-md-12">
                                <h3 class="title">Leave Your Response</h3>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                @error('post_id')
                                <div class="text-danger">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                                <label for="name">Name <span class="required"></span></label>
                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                <div class="text-danger">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email <span class="required"></span></label>
                                <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                <div class="text-danger">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="website">Website</label>
                                <input type="url" id="website" name="website" value="{{old('website')}}" class="form-control">
                                @error('website')
                                <div class="text-danger">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message">Response <span class="required"></span></label>
                                <textarea class="form-control" name="comment" value="{{old('comment')}}" placeholder="Write your response ..."></textarea>
                                @error('comment')
                                <div class="text-danger">
                                    <span>{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary">Send Response</button>
                            </div>
                        </form>
                        <h2 class="title">{{$comments->count()}} Responses
                        </h2>
                        <div class="comment-list">
                            <div class="item">
                                @foreach($comments as $data)
                                <div class="user">
                                    <figure>
                                        <img src="{{asset('asset/images/avatar_profile.png')}}">
                                    </figure>

                                    <div class="details">
                                        <h5 class="name">{{$data->name}}</h5>
                                        <div class="time">{{$data->created_at->diffForHumans()}}</div>
                                        <div class="description">
                                            {{$data->comment}}
                                        </div>
                                        <footer>
                                            <a href="#">Reply</a>
                                        </footer>
                                        @if ($data->replies->count() > 0)
                                            <div class="nested-comments">
                                                @include('partials.comments', ['comments' => $data->replies])
                                            </div>
                                        @endif
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
