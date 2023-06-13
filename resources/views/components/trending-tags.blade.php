<ol class="tags-list">
    @foreach($tags as $data)
        <li><a href="#">{{$data->title}}</a></li>
    @endforeach
</ol>
