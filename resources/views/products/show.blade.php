@extends('layouts/main')
@section('content')
<div>
<div>{{$product->id}}.{{$product->title}}</div>
<div>{{$product->content}}</div>
nkar: <div><img src='{{asset('uploads'.'/'.$product->image)}}'></div>
<form method="post" action="{{route('update.basket')}}">
    @csrf
    <input type='number' name='count' min='0' max="{{$product->count}}">
    <input type='hidden' name='product_id' value="{{$product->id}}">
    <input type="submit" value='Add to Basket'>
</form>
</div>
<div><a href="{{route('products')}}">Back</a></div>
    @endsection