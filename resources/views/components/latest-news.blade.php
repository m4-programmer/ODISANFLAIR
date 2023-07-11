<div class="row">
    @foreach($latestnews as $data)
        <article class="article col-md-6">
            <div class="inner">
                <figure>
                    <a href="#">
                        <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                    </a>
                </figure>
                <div class="padding">
                    <div class="detail">
                        <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                        <div class="category"><a href="{{url('/category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                    </div>
                    <h2><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h2>
                    <p>{{Str::limit($data->post, 100,'...')}}</p>
                    <footer>
                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$data->likes}}</div></a>
                        <a class="btn btn-primary more" href="{{url($data->tags->title.'/'.$data->slug)}}">
                            <div>More</div>
                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                        </a>
                    </footer>
                </div>
            </div>
        </article>
    @endforeach
</div>

