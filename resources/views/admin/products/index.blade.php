@extends('layouts.admin')
@section('content')
<div>
    <div><a href="{{route('admin.product.create')}}">Create</a></div>
    @foreach ($products as $product)
            <div><a href='{{route('admin.product.show', $product->id)}}'>{{$product->id}}.{{$product->title}}</a></div>
        @endforeach
</div>
@endsection
