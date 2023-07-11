<ol class="tags-list">
    @foreach($tags as $data)
        <li><a href="{{url('/category/'.$data->title)}}">{{$data->title}}</a></li>
    @endforeach
</ol>
