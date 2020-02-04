@extends('layouts.app')

@section('content')

    <div class="affichage">
        <img src="{{$product->image->url()}}" alt="{{$product->name}}" style="width:300px;height:300px;">
        <h1>{{$product->name}}</h1>
        <p class="price">${{$product->price}}</p>
        <p style="color:black;font-size:10px;">(stock: {{$product->quantity}} remaining Products)</p>
        <button class="boutonproduit" onclick="addToCart({{$product}})">Add to Cart</button>
        <p>{{$product->description}}</p>
    </div>

@endsection
