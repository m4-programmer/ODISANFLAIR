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

                    {{--Hot News--}}
{{--                    <div class="col-md-6 col-sm-6">--}}
{{--                        <h1 class="title-col">--}}
{{--                            Hot News--}}
{{--                            <div class="carousel-nav" id="hot-news-nav">--}}
{{--                                <div class="prev">--}}
{{--                                    <i class="ion-ios-arrow-left"></i>--}}
{{--                                </div>--}}
{{--                                <div class="next">--}}
{{--                                    <i class="ion-ios-arrow-right"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </h1>--}}
{{--                        <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">--}}
{{--                            <x-hot-news :hotnews="$hotNews" />--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="line top">--}}
{{--                        <div>Just Another News</div>--}}
{{--                    </div>--}}
                    <div class="row">
{{--                        <x-another-news :news="$anotherNews" />--}}

                        {{--Pagination--}}
                        @if($searchData)
                            <div class="col-md-12 text-center">
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    @if ($searchData->onFirstPage())
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                    @else
                                        <li><a href="{{ $searchData->previousPageUrl() }}"><i class="ion-ios-arrow-left"></i></a></li>
                                    @endif

                                    <!-- Pagination Links -->
                                    @for ($page = 1; $page <= $searchData->lastPage(); $page++)
                                        @if ($page == $searchData->currentPage())
                                            <li class="active"><a href="#">{{ $page }}</a></li>
                                        @else
                                            <li><a href="{{ $searchData->url($page) }}">{{ $page }}</a></li>
                                        @endif
                                    @endfor

                                    <!-- Next Page Link -->
                                    @if ($searchData->hasMorePages())
                                        <li><a href="{{ $searchData->nextPageUrl() }}"><i class="ion-ios-arrow-right"></i></a></li>
                                    @else
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                    @endif
                                </ul>
                                <div class="pagination-help-text">
                                    Showing {{ $searchData->firstItem() }}-{{ $searchData->lastItem() }} of {{ $searchData->total() }} &mdash; Page {{ $searchData->currentPage() }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <x-side-bar :recommended="$recommended" :comments="$comments"  :author="$author" :popular="$popular" />
            </div>

        </div>
    </section>



    @include('partials.best_of_week')
</x-layout>
