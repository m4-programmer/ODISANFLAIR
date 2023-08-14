<x-layout body="primary" >
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">{{$title}}</li>
                            </ol>
                            <h1 class="page-title"> {{$title}}</h1>
                            <p class="page-subtitle">Showing all posts with category <i>{{$title}}</i></p>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        @forelse($posts as $data)
                            <article class="col-md-12 article-list">
                                <div class="inner">
                                    <figure>
                                        <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                            <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <div class="detail">
                                            <div class="category">
                                                <a href="{{url('/category'.$data->tags->title)}}">{{$data->tags->title}}</a>
                                            </div>
                                            <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                                        </div>
                                        <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                                        <p>{!! Str::limit($data->post, 200,'...') !!}</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>
                                                {{$data->likes}}</div></a>
                                            <a class="btn btn-primary more" href="{{url($data->tags->title.'/'.$data->slug)}}">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <article class="col-md-12 article-list">
                                <div class="inner">
                                    <p>No post available yet</p>

                                </div>
                            </article>
                        @endforelse

                            <div class="col-md-12 text-center">
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    @if ($posts->onFirstPage())
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                    @else
                                        <li><a href="{{ $posts->previousPageUrl() }}"><i class="ion-ios-arrow-left"></i></a></li>
                                    @endif

                                    <!-- Pagination Links -->
                                    @for ($page = 1; $page <= $posts->lastPage(); $page++)
                                        @if ($page == $posts->currentPage())
                                            <li class="active"><a href="#">{{ $page }}</a></li>
                                        @else
                                            <li><a href="{{ $posts->url($page) }}">{{ $page }}</a></li>
                                        @endif
                                    @endfor

                                    <!-- Next Page Link -->
                                    @if ($posts->hasMorePages())
                                        <li><a href="{{ $posts->nextPageUrl() }}"><i class="ion-ios-arrow-right"></i></a></li>
                                    @else
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                    @endif
                                </ul>
                                <div class="pagination-help-text">
                                    Showing {{ $posts->firstItem() }}-{{ $posts->lastItem() }} of {{ $posts->total() }} &mdash; Page {{ $posts->currentPage() }}
                                </div>
                            </div>


                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <aside>
                        <div class="aside-body">
                            <figure class="ads">
                                <a href="#">
                                    <img src="{{asset('asset/images/ad.png')}}">
                                </a>
                                <figcaption>Advertisement</figcaption>
                            </figure>
                        </div>
                    </aside>
                    <aside>
                        <h1 class="aside-title">Recent Post</h1>
                        <div class="aside-body">
                            <article class="article-fw">
                                @foreach($sidePost->random(1) as $data)
                                    <div class="inner">
                                        <figure>
                                            <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                                <img src="{{asset('asset/images/news/img16.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <div class="detail">
                                                <div class="time">{{$data->created_at->format("F d, Y")}}</div>
                                                <div class="category"><a href="{{url('category'.$data->tags->title)}}">{{$data->tags->title}}</a></div>
                                            </div>
                                            <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                                            <p>
                                                {{Str::limit($data->post, 200)}}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </article>
                            <div class="line"></div>
                            @foreach($sidePost->take(2) as $data)
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                            <img src="{{asset($data->cover)}}" alt="{{$data->title}}">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                                        <div class="detail">
                                            <div class="category">
                                                <a href="{{url('/category'.$data->tags->title)}}">{{$data->tags->title}}</a>
                                            </div>
                                            <div class="time">{{$data->created_at->format('F d, Y')}}</div>

                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>
                    </aside>
                    <x-navs.sidebar-newsletter />
                </div>
            </div>
        </div>
    </section>
</x-layout>
