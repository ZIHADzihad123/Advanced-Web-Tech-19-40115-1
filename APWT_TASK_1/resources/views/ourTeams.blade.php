@extends('main')
@section('content')
<h1>Teams </h1>
<ul>
@foreach($names as $n)
    <li>{{$n}}</li>
@endforeach
</ul>


@endsection