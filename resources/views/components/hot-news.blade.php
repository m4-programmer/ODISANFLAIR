@foreach($hotnews as $data)
    <article class="article-mini">
        <div class="inner">
            <figure>
                <a href="#">
                    <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                </a>
            </figure>
            <div class="padding">
                <h1><a href="#">{{$data->title}}</a></h1>
                <div class="detail">
                    <div class="category"><a href="{{url('/category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                    <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                </div>
            </div>
        </div>
    </article>
@endforeach
