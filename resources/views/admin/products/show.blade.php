@extends('layouts/admin')
@section('content')
<div>
    <div>{{$product->id}}.{{$product->title}}</div>
    <div>{{$product->content}}</div>
    </div>
    <div><a href="{{route('admin.product.edit', $product->id)}}">Edit</a></div>
    <form action="{{route('admin.product.delete', $product->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
    </form>
    
    <div><a href="{{route('admin.products.index')}}">Back</a></div>
    @endsection