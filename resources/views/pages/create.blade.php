@extends('layouts.main-layout')

@section('content')
<form action="{{route('store.postcard') }}" method="POST" enctype="multipart/form-data">

    @method('POST')
    @csrf
    
    <label for="sender">Sender</label>
    <input type="text" name="sender"><br>

    <label for="address">Address</label>
    <input type="text" name="address"><br>

    <label for="text">Text</label>
    <textarea cols="50" rows="10" name="text"></textarea><br>
    
    <label for="image">Image</label>
    <input type="file" name="image"><br>

    <input class="btn btn-primary" type="submit" value="CREATE">

</form>
@endsection
