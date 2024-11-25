<header class="primary">
    <div class="firstbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="brand">
                        <a href="{{route('blog_index')}}">
                            <img src="{{asset('asset/images/odin.jpg')}}" style="height: 80px; width: 100%" alt="Magz Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form class="search" autocomplete="off" action="{{route('search')}}">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="q" value="{{request('q')}}" class="form-control" placeholder="Type something here">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="ion-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="help-block">
                            <div class="okwy">Follow Us Via:</div>
                            <x-follow-us-head />
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-12 text-right">
                    <ul class="nav-icons">
                        <li><a href="{{url('about')}}"><i class="ion-person-add"></i><div>About</div></a></li>
                        <li><a href="{{url('contact')}}"><i class="ion-person"></i><div>Contact</div></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start nav -->
    <x-nav />
    <!-- End nav -->
</header>
