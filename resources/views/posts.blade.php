{{-- @dd($postingnya) --}}


@extends('layout.main')

@section('container')
@foreach ($postingnya as $post)
<article class="mb-3">
    <h2>
        <a href="/posts/{{$post["slug"]}}"> {{$post['title']}}</a>
    </h2>
    <h5>By: {{$post['author']}}</h5>
    <p>{{$post['body']}}</p>
</article>
@endforeach
@endsection
