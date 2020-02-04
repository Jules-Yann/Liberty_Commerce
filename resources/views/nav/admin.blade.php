@extends('layouts.app')

@section('content')
@if( Auth::user()->id_right == 2)

    <div id="online">Nombre d'utilisateurs connecté(s): {{ Auth::user()->getConnectedPeople() }} </div>

    <h2>Add product <button onclick="window.location='{{url("http://localhost:8000/create/category")}}'"> add category </button></h2>

    <form action="{{'/store'}}" method="post" style="text-align: center" enctype="multipart/form-data">

        {{ csrf_field() }}

        Category:
        <select name=category>
            <option>Select a category</option>
            @foreach($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>

        <br><br>
        <label for="name">Name :</label>
        <input class="@error('name') is-invalid @enderror" type="text" name="name">

        <label for="price" type="number">Price :</label>
        <input  class="@error('price') is-invalid @enderror" type="number" name="price">

        <label for="quantity">Quantity :</label>
        <input class="@error('quantity') is-invalid @enderror" type="number" name="quantity">

        <br><br>
        <label for="image">Picture :</label>
        <input type="file" name="image">
        <br><br>
        <label for="description">Description :</label>
        <br> <textarea type="text" class="@error('description') is-invalid @enderror" name="description" rows="10" cols="60"></textarea>
        <br><br>
        <input type="submit" value="Add">
    </form>
    @else
    <h1> You don't have access to</h1>
@endif
@endsection
