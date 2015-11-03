@extends('app')

@section('crud')
    <li><a href="{{ url('product') }}">Product</a></li>
    <li><a href="{{ url('product/'.$product->product_id.'/edit') }}">Edit</a></li>
    <li><a href="{{ action('ProductController@delete', ['id' => $product->product_id]) }}">Delete</a></li>
@endsection
@section('content')
    <div class="row col-md-8 col-md-offset-2">

        <h1>{{$product->name}} detailed info</h1>

        @include('information-table', ['entity' => $product])
    </div>
@endsection