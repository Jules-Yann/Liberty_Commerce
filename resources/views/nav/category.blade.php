@extends('layouts.app')

@section('content')
@if( Auth::user()->id_right == 2)
    <h2>Add Category <button onclick="window.location='{{url("http://localhost:8000/admin")}}'"> add product </button></h2>

    <form action="{{'/create/creationCategory'}}" method="get" style="text-align: center" enctype="multipart/form-data">

        {{ csrf_field() }}
        <h2><label for="name">Category</label></h2>
        <input type="text" name="name"><br>
        <input type="submit" value="Add">
    </form>
    @else
    <h1> You don't have access to</h1>
@endif
@endsection
