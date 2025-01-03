<section class="best-of-the-week">
    <div class="container">
        <h1><div class="text">Best Of The Week</div>
            <div class="carousel-nav" id="best-of-the-week-nav">
                <div class="prev">
                    <i class="ion-ios-arrow-left"></i>
                </div>
                <div class="next">
                    <i class="ion-ios-arrow-right"></i>
                </div>
            </div>
        </h1>
        <div class="owl-carousel owl-theme carousel-1">
            @foreach($posts->take(6) as $data)
                <x-article-card :data="$data" />
            @endforeach
        </div>
    </div>
</section>
