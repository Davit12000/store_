@extends('layouts/main')
@section('content')

    <div>
        @foreach ($products as $product)
            <div class="products">
                <h1>Product Name: {{$product->title}}</h1>
                <img class="product_image" src="{{asset('uploads'.'/'.$product->image)}}"><br>
                <span>{{$product->content}}</span>
                <h3>{{$product->count}}, count in your basket.<h3>
            </div>
        @endforeach
    </div>
    
    @endsection