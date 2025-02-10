<x-layout body="skin-orange">

    @section('meta_title'){{ "Videos Section" }}@stop

    @section('meta_description'){{ "Videos Section" }}@stop

    @section('meta_image'){{ "" }}@stop

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
                            <x-videos :videos="$videos" />
                        </div>
                    </div>

                    <div class="row">

                        {{--Pagination--}}
                        @if($videos)
                            <div class="col-md-12 text-center">
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    @if ($videos->onFirstPage())
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                    @else
                                        <li><a href="{{ $videos->previousPageUrl() }}"><i class="ion-ios-arrow-left"></i></a></li>
                                    @endif

                                    <!-- Pagination Links -->
                                    @for ($page = 1; $page <= $videos->lastPage(); $page++)
                                        @if ($page == $videos->currentPage())
                                            <li class="active"><a href="#">{{ $page }}</a></li>
                                        @else
                                            <li><a href="{{ $videos->url($page) }}">{{ $page }}</a></li>
                                        @endif
                                    @endfor

                                    <!-- Next Page Link -->
                                    @if ($videos->hasMorePages())
                                        <li><a href="{{ $videos->nextPageUrl() }}"><i class="ion-ios-arrow-right"></i></a></li>
                                    @else
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                    @endif
                                </ul>
                                <div class="pagination-help-text">
                                    Showing {{ $videos->firstItem() }}-{{ $videos->lastItem() }} of {{ $videos->total() }} &mdash; Page {{ $videos->currentPage() }}
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
