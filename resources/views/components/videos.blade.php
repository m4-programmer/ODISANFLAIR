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
            <div class="video-container"> <!-- Responsive Video Container -->
                {!! $data->url !!}
            </div>
            <div class="padding">
                <h2 class="article-title">{{$data->title}}</h2>
            </div>
        </article>
    @endforeach

</div>

