@php
    use App\Models\Post;
    use App\Models\Tag;
    $posts = Post::latest()->get();
    $latestPosts = $posts->take(4);
    $tags = Tag::all();
@endphp
<!doctype html>
<html lang="en">
<x-html-head />
<body class="{{$body ?? ''}}">
@include('partials.header')
{{$slot}}
<x-footer :tags="$tags" :latestnews="$latestPosts"/>
@include('partials.scripts')
</body>
</html>
