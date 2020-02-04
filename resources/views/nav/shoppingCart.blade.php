@extends('layouts.app')

@section('content')
    <div class="shopping-cart">
        <div class="title">
            <h1>Shopping Cart</h1>
        </div>
        <!--<div class="item">
            <a class="croix" href=""> <i class="fa fa-times"></i></a>
            <img style="height: 100px; width: 80px "/>
            <div id="name" class="com"></div>
            <div id="desc" class="com"></div>
            <input value=1 type="number" style="height: 30px; width: 30px; margin-top: 42px;">
            <div id="price" class="com"></div>
        </div>-->
    </div>
    <body onload="dispProdsCart()">
    <div id="cart" class="shopping-cart"></div>
    </body>
@endsection
