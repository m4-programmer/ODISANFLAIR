<x-layout body="skin-orange">


    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <!-- Heading -->
                    <div style="text-align: center;">
                        <div>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Library</li>
                            </ol>
                            <h1 class="page-title">Library</h1>
                            <p class="page-subtitle">Empowering Minds, One Step at a Time</p>
                        </div>
                    </div>

                    <!-- New Library Section -->
                    <div class="line">
                        <div>{{$title}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <x-latest-news :latestnews="$searchData" buttonText="Check it Out"/>
                        </div>
                        @if($searchData)
                            <div class="col-md-12 text-center">
                                <a class="btn btn-primary more" href="#">
                                    <div>MORE</div>
                                    <div>
                                        <i class="ion-ios-arrow-thin-right"></i>
                                    </div>
                                </a>
                            </div>
                        @endif
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
