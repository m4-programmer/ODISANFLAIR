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

</style>
<div class="row">
    @foreach($latestnews as $data)
    <article class="article col-md-6" >
        <div class="inner" >
            <figure>
                <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                    <img src="{{asset($data->cover)}}" alt="{{$data->title}}" style="height:300px!important;background-size:contain!important">
                </a>
            </figure>
            <div class="padding">
                <div class="detail">
                    <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                    <div class="category"><a href="{{url('/category/'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                </div>
                <h2 class="article-title"><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h2>
                <div class="article-description" style="height: 100px!important;" style="text-align: justify">{!! Str::limit(implode(' ', array_slice(explode(' ', strip_tags($data->post)), 0, 50)), 150, '...' )!!}</div>

                <footer style="margin-top: 10px!important">
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

