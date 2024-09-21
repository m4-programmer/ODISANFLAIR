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
    @foreach($videos as $data)
        @php
            // Convert the standard YouTube URL to embed format if necessary
            $embedUrl = str_contains($data->url, 'watch?v=') ? str_replace('watch?v=', 'embed/', $data->url) : $data->url;
        @endphp
        <article class="article col-md-12 col-6">
            <div class="">
                <div>
                    <iframe
                        width="100%"
                        height="340"
                        src="{{$embedUrl}}"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>
                </div>
                <div class="padding">
                    <h2 class="article-title">{{$data->title}}</h2>
                </div>
            </div>
        </article>
    @endforeach

</div>

