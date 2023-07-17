<aside>
    <h1 class="aside-title">Popular <a href="{{route('popular')}}" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
    <div class="aside-body">
        @foreach($popular as $data)
            <article class="article-mini">
                <div class="inner">
                    <figure>
                        <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                            <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                        </a>
                    </figure>
                    <div class="padding">
                        <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{Str::limit($data->title, 50,'...')}}</a></h1>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</aside>
