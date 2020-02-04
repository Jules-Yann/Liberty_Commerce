@extends('layouts.app')

@section('content')
    <div class="flex-contain">
        @foreach($products as $product)
            <div class="element">
                    <button onclick="document.location.href='/delProd/{{$product->id}}'">remove product</button>
                <button type="submit" class="bouton"
                        onclick="window.location='{{url("http://localhost:8000/product/$product->id")}}'">
                    <img src="{{$product->image->url()}}" alt="{{$product->name}}">
                    <h1>{{$product->name}}</h1>
                    <p class="price">${{$product->price}}</p>
                    <p class="description">{{$product->description}}</p>
                </button>

                <button type="button" class="cart" onclick="addToCart({{$product}})">Add to Cart</button>
            </div>
        @endforeach
    </div>
@endsection
