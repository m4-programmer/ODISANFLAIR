@foreach($news as $data)
    <article class="col-md-12 article-list">
        <div class="inner">
            <figure>
                <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                    <img src="{{$data->cover}}" alt="{{$data->title}}">
                </a>
            </figure>
            <div class="details">
                <div class="detail">
                    <div class="category">
                        <a href="{{url('/category/'.$data->tags->title)}}">{{$data->tags->title}}</a>
                    </div>
                    <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                </div>
                <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                <p>{!! Str::limit($data->post, 100,'...') !!}</p>

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
