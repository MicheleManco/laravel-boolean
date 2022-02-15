@extends('layouts.main-layout')
@section('content')

<p>ciao ciao</p>

<a class="btn btn-primary" href="{{route('create.postcard')}}">Create</a>

<postcards></postcards>
@endsection