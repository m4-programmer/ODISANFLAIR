<x-layout body="skin-orange">


    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <x-headlines />
                    <!--  -->
                    <!--  -->
                    <div class="line">
                        <div>{{$title}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <x-latest-news :latestnews="$searchData" />
                        </div>
                    </div>
                    {{--Advertisement--}}
                    <div class="banner">
                        <a href="#">
                            <img src="{{asset('asset/images/ads.png')}}" alt="Sample Article">
                        </a>
                    </div>
                    {{--End of Advertisement--}}
                </div>
                <x-side-bar :recommended="$recommended" :comments="$comments"  :author="$author" :popular="$popular" />
            </div>
        </div>
    </section>

    @include('partials.best_of_week')
</x-layout>
