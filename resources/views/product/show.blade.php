@extends('app')

@section('content')
    <h1>Product detailed information</h1>
    @foreach($productAttributes as $key => $value)
        <h3 style="color:darkred">{{$key}}</h3>
        <h3 style="color:darkgoldenrod">{{$value}}</h3>
    @endforeach
@endsection