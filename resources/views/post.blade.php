{{-- @dd($postnya) --}}

@extends('layout.main')

@section('container')
<article >
    <h2>
        {{$postnya['title']}}
    </h2>
    <h5>By: {{$postnya['author']}}</h5>
    <p>{{$postnya['body']}}</p>

    <a href="/blog"> Back To Post</a>
</article>
@endsection
