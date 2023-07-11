<div class="owl-carousel owl-theme slide" id="featured">
    @foreach($featured as $data)
        <div class="item">
            <article class="featured">
                <div class="overlay"></div>
                <figure>
                    <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                </figure>
                <div class="details">
                    <div class="category"><a href="{{url('/category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                    <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}"> {{$data->title}}</a></h1>
                    <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                </div>
            </article>
        </div>
    @endforeach
</div>
