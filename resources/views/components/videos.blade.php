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
<div class="row">
    @foreach($videos as $data)
        @php
            // Convert the standard YouTube URL to embed format if necessary
            $embedUrl = str_contains($data->url, 'watch?v=') ? str_replace('watch?v=', 'embed/', $data->url) : $data->url;
        @endphp
        <article class="article col-md-12 col-6">
          @if(!$data->cover)
                <div class="video-container">
                    {!! $data->url !!}
                </div>
            @else
                <article class="col-md-12 article">
                    <div class="inner">
                        <figure>
                            <a href="{{route("view_video", $data->title)}}">
                                <img src="{{asset($data->cover)}}" alt="{{$data->title}}"
                                     style="max-height:300px!important; height:100%;background-size:contain!important">
                            </a>
                        </figure>
                        <div class="padding">
                            <h2 class="article-title"><a href="{{route("view_video", $data->title)}}">{{$data->title}}</a></h2>
                            <div class="article-description" style="height: 100px!important;" style="text-align: justify">{!! Str::limit(implode(' ', array_slice(explode(' ', strip_tags($data?->post)), 0, 50)), 150, '...' )!!}</div>
                        </div>
                    </div>
                </article>
            @endif
            <div class="padding">
                <h2 class="article-title">{{$data->title}}</h2>
            </div>
        </article>
    @endforeach

</div>

