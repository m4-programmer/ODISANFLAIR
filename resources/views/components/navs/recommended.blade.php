<aside>
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="active">
            <a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
                <i class="ion-android-star-outline"></i> Recomended
            </a>
        </li>
        <li>
            <a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
                <i class="ion-ios-chatboxes-outline"></i> Comments
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="recomended">
            <article class="article-fw">
                @foreach($recommended->random(1) as $data)
                    <div class="inner">
                        <figure>
                            <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                            </a>
                        </figure>
                        <div class="details">
                            <div class="detail">
                                <div class="time">{{$data->created_at->format("F d, Y")}}</div>
                                <div class="category"><a href="{{url('category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                            </div>
                            <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                            <p>
                                {!! Str::limit($data->post, 200)!!}
                            </p>
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
                                <div class="category"><a href="{{url('category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                                <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        {{--Begining Comments--}}
        <div class="tab-pane comments" id="comments">
            <div class="comment-list sm">
                <div class="item">
                    <div class="user">                                
                        <figure>
                            <img src="{{asset('asset/images/user-06.jpg')}}" alt="User Picture">
                        </figure>
                        <div class="details">
                            <h5 class="name">James Harris Simons</h5>
                            <div class="time">24 Hours</div>
                            <div class="description">
                                Our brains actually don't mind hard work, we just don't love the idea of it.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="user">                                
                        <figure>
                            <img src="{{asset('asset/images/user-02.jpg')}}" alt="User Picture">
                        </figure>
                        <div class="details">
                            <h5 class="name">Bubka</h5>
                            <div class="time">24 Hours</div>
                            <div class="description">
                                Your lectures are invaluable to me, a faulty but improving day trader. Thank you very much ☺️🙏
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="user">                                
                        <figure>
                            <img src="{{asset('asset/images/user-07.jpg')}}" alt="User Picture">
                        </figure>
                        <div class="details">
                            <h5 class="name">Sujith P</h5>
                            <div class="time">24 Hours</div>
                            <div class="description">
                                "As a trader, feeling uncomfortable is your new comfort zone." ❤👍
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Comments        --}}
    </div>
</aside>
