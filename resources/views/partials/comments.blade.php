@foreach($comments as $data)
    <div class="user">
        <figure>
            <img src="{{$data->user->img ? asset($data->user->img) : asset('asset/images/avatar_profile.png')}}">
        </figure>

        <div class="details">
            <h5 class="name">{{$data?->user?->name}}</h5>
            <div class="time">{{$data->created_at->diffForHumans()}}</div>
            <div class="description">
                {{$data->comment}}
            </div>
{{--            <footer>--}}
{{--                <a href="#">Reply</a>--}}
{{--            </footer>--}}
        </div>
    </div>
@endforeach
