@props(['data'])

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
