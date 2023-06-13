<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
    <div class="sidebar-title for-tablet">Sidebar</div>
    <aside>
        <div class="aside-body">
            <div class="featured-author">
                <div class="featured-author-inner">
                    <div class="featured-author-cover" style="background-image: url({{asset('asset/images/news/img15.jpg')}});">
                        <div class="badges">
                            <div class="badge-item"><i class="ion-star"></i> Founder</div>
                        </div>
                        <div class="featured-author-center">
                            <figure class="featured-author-picture">
                                <img src="{{asset('asset/images/img01.jpg')}}" alt="Founder">
                            </figure>
                            <div class="featured-author-info">
                                <h2 class="name">{{$author->name}}</h2>
                                <div class="desc">@"{{$author->name}}"</div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-author-body">
                        <div class="featured-author-count">
                            <div class="item">
                                <a href="#">
                                    <div class="name">Posts</div>
                                    <div class="value">{{$author->posts->count()}}</div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="name">Stars</div>
                                    <div class="value">3,729</div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="icon">
                                        <div>More</div>
                                        <i class="ion-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="featured-author-quote">
                            "Great traders aren't born or made overnight.It takes patience,discipline and consistency to master the act of trading"
                        </div>
                        <div class="block">
                            <h2 class="block-title">Photos</h2>
                            <div class="block-body">
                                <ul class="item-list-round" data-magnific="gallery">
                                    <li><a href="{{asset('asset/images/news/img06.jpg')}}" style="background-image: url('{{asset('asset/images/news/img06.jpg')}}');"></a></li>
                                    <li><a href="{{asset('asset/images/news/img07.jpg')}}" style="background-image: url('{{asset('asset/images/news/img07.jpg')}}');"></a></li>
                                    <li><a href="{{asset('asset/images/news/img08.jpg')}}" style="background-image: url('{{asset('asset/images/news/img08.jpg')}}');"></a></li>
                                    <li><a href="{{asset('asset/images/news/img09.jpg')}}" style="background-image: url('{{asset('asset/images/news/img09.jpg')}}');"></a></li>
                                    <li><a href="{{asset('asset/images/news/img10.jpg')}}" style="background-image: url('{{asset('asset/images/news/img10.jpg')}}');"></a></li>
                                    <li><a href="{{asset('asset/images/news/img11.jpg')}}" style="background-image: url('{{asset('asset/images/news/img11.jpg')}}');"></a></li>
                                    <li><a href="{{asset('asset/images/news/img12.jpg')}}" style="background-image: url('{{asset('asset/images/news/img12.jpg')}}');"><div class="more">+2</div></a></li>
                                    <li class="hidden"><a href="{{asset('asset/images/news/img13.jpg')}}" style="background-image: url('{{asset('asset/images/news/img13.jpg')}}');"></a></li>
                                    <li class="hidden"><a href="{{asset('asset/images/news/img14.jpg')}}" style="background-image: url('{{asset('asset/images/news/img14.jpg')}}');"></a></li>
                                </ul>
                            </div>
                        </div>
{{--                        <div class="featured-author-footer">--}}
{{--                            <a href="#">See All Authors</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </aside>
    {{--Beginning of Popular--}}
    <x-navs.sidebar-popular :popular="$popular"/>
    {{--End of Popular--}}
    {{--Begining of News letter--}}
    <x-navs.sidebar-newsletter />
    {{--End of news letter--}}
    {{--Beginning of Recommended --}}
    <x-navs.recommended :recommended="$recommended" :comments="$comments"/>
    {{--End of Recommended--}}
    {{--Video--}}
    <x-navs.sidebar-video />
    {{--Begining of Sponsor tabs--}}
    <x-navs.sponsor />
    {{--End of Sponsor tab--}}
</div>
