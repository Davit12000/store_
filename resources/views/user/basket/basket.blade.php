@extends('layouts/main')
@section('content')

    <div>
        @foreach ($products as $product)
            <div class="products">
                <div class='remove'>
                <form action="{{route('remove.basket', $product->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value='X'>  
                </form></div>
                <h1>Product Name: {{$product->title}}</h1>
                <img class="product_image" src="{{asset('uploads'.'/'.$product->image)}}"><br>
                <span>{{$product->content}}</span>
                <h3>{{$product->pivot->product_count}}, count in your basket.<h3>
            </div>
        @endforeach
        <?php if (count($products) == 0) { ?>
            <h3>Your basket is empty.<span><a href="{{route('products')}}">Go to Products</a></span></h3>
        <?php } else { ?>
            <a href='{{route('basket.buy')}}'>Buy</a>
        <?php } ?>
    </div>
    
    @endsection