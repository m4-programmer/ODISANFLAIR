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
 <!--  -->

 <script type='text/javascript' src='//offsetgobetween.com/e3/9c/ae/e39caeea4916f4282f87459370871c55.js'></script>
    
</body>
</html>
