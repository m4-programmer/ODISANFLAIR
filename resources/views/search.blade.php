<x-layout body="primary" >
    <section class="search">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside>
                        <h2 class="aside-title">Search</h2>
                        <div class="aside-body">
                            <p>Search with other keywords or use filters for more accurate results.</p>
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control" placeholder="Type something ..." value="{{request('q')}}">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary">
                                                <i class="ion-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <aside>
                        <h2 class="aside-title">Filter</h2>
                        <div class="aside-body">
                            <form class="checkbox-group">
                                <div class="group-title">Date</div>
                                <div class="form-group">
                                    <label><input type="radio" name="date" value="" checked> Anytime</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="radio" value="today" name="date"> Today</label>
                                </div>
                                <div class="form-group">
                                    <label><input value="last_week" type="radio" name="date"> Last Week</label>
                                </div>
                                <div class="form-group">
                                    <label><input value="last_month" type="radio" name="date"> Last Month</label>
                                </div>
                                <br>
                                <div class="group-title">Categories</div>
                                <div class="form-group">
                                    <label><input type="checkbox" value="" name="category" checked> All Categories</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" value="category1" name="category"> Lifestyle</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Travel</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Computer</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Film</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Sport</label>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="nav-tabs-group">
                        <ul class="nav-tabs-list">
                            <li class="active"><a href="#">All</a></li>
                            <li><a href="#">Latest</a></li>
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">Trending</a></li>
                            <li><a href="#">Videos</a></li>
                        </ul>
                        <div class="nav-tabs-right">
                            <select class="form-control">
                                <option>Limit</option>
                                <option>10</option>
                                <option>20</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                    </div>
                    <div class="search-result">
                        Search results for keyword "{{$query}}" found in {{number_format($totalCount)}} result.
                    </div>
                    <div class="row">
                        @forelse($result as $data)
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="{{url($data->tags->title.'/'.$data->slug)}}">
                                        <img src="{{$data->cover}}" alt="{{$data->title}}">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">{{$data->tags->title}}</a>
                                        </div>
                                        <div class="time">{{$data->created_at->format('F d, Y')}}</div>
                                    </div>
                                    <h1><a href="{{url($data->tags->title.'/'.$data->slug)}}">{{$data->title}}</a></h1>
                                    <p>{!! Str::limit($data->post, 100,'...') !!}</p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$data->likes}}</div></a>
                                        <a class="btn btn-primary more" href="{{url($data->tags->title.'/'.$data->slug)}}">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        @empty
                            <article>
                                <div class="inner">
                                    No Item Found
                                </div>
                            </article>
                        @endforelse
                        <div class="col-md-12 text-center">
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    @if ($result->onFirstPage())
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                    @else
                                        <li><a href="{{ $result->previousPageUrl().'&q='.request('q') }}"><i class="ion-ios-arrow-left"></i></a></li>
                                    @endif

                                    <!-- Pagination Links -->
                                    @for ($page = 1; $page <= $result->lastPage(); $page++)
                                        @if ($page == $result->currentPage())
                                            <li class="active"><a href="#">{{ $page }}</a></li>
                                        @else
                                            <li><a href="{{ $result->url($page).'&q='.request('q') }}">{{ $page }}</a></li>
                                        @endif
                                    @endfor

                                    <!-- Next Page Link -->
                                    @if ($result->hasMorePages())
                                        <li><a href="{{ $result->nextPageUrl().'&q='.request('q') }}"><i class="ion-ios-arrow-right"></i></a></li>
                                    @else
                                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                    @endif
                                </ul>
                                <div class="pagination-help-text">
                                    Showing {{ $result->firstItem() }}-{{ $result->lastItem() }} of {{ $result->total() }} &mdash; Page {{ $result->currentPage() }}
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
