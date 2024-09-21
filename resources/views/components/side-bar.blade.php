<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
    <div class="sidebar-title for-tablet">Sidebar</div>
    <aside>
        <div class="aside-body">
            <div class="featured-author">
                <div class="featured-author-inner">
                    <div class="featured-author-cover" style="background-image: url({{asset('asset/images/news/img12.jpg')}});">
                        <div class="badges">
                            <div class="badge-item"><i class="ion-star"></i> Founder</div>
                        </div>
                        <div class="featured-author-center">
                            <figure class="featured-author-picture">
                                <img src="{{asset('images-portfolio/MyPhoto.png')}}" alt="Founder">
                            </figure>
                            <div class="featured-author-info">
                                <h2 class="name">{{$author->name}}</h2>
                                <div class="desc">@"{{"Som-Danny"}}"</div></div>
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
                                    <li><a href="{{asset('images-portfolio/folio/Picture10.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Picture10.png')}}');"></a></li>
                                    <li><a href="{{asset('images-portfolio/folio/Piture5.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Piture5.png')}}');"></a></li>
                                    <li><a href="{{asset('images-portfolio/folio/Piture7.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Piture7.png')}}');"></a></li>
                                    <li><a href="{{asset('images-portfolio/folio/Piture1.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Piture1.png')}}');"></a></li>
                                    <li><a href="{{asset('images-portfolio/folio/Picture12.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Picture12.png')}}');"></a></li>
                                    <li><a href="{{asset('images-portfolio/folio/Picture9.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Picture9.png')}}');"></a></li>
                                    <li><a href="{{asset('images-portfolio/folio/Piture4.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Piture4.png')}}');"><div class="more">+2</div></a></li>
                                    <li class="hidden"><a href="{{asset('images-portfolio/folio/Piture6.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Piture6.png')}}');"></a></li>
                                    <li class="hidden"><a href="{{asset('images-portfolio/folio/Piture2.png')}}" style="background-image: url('{{asset('images-portfolio/folio/Piture2.png')}}');"></a></li>
                                </ul>
                            </div>
                        </div>
                       <div class="featured-author-footer">
                           <a href="#">See All Authors</a>
                       </div>
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
