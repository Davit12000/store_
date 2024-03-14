@extends('layouts/main')
@section('content')
<div>
<div>{{$product->id}}.{{$product->title}}</div>
<div>{{$product->content}}</div>
nkar: <div>{{$product->image}}</div>
</div>
<div><a href="{{route('products')}}">Back</a></div>
    @endsection