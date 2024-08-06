@extends('layout.main')

@section('container')
<h1>halaman About</h1>
    <h3>{{$nama}}</h3>
    <img src="img/{{$image}}" alt="{{$nama}}" width="200">
@endsection

