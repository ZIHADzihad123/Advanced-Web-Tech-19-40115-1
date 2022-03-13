@extends('main')
@section('content')
<h1>Products </h1>
<ul>
@foreach($products as $n)
    <li>{{$n}}</li>
@endforeach
</ul>


@endsection