@extends('app')

@section('crud')
    <li><a href="{{ url('product-option') }}">Product Option</a></li>
    <li><a href="{{ url('product-option/'.$productOption->product_options_id.'/edit') }}">Edit</a></li>
    <li><a href="{{ action('ProductOptionController@delete', ['id' => $productOption->product_options_id]) }}">Delete</a></li>
@endsection
@section('content')

    <div class="row col-md-8 col-md-offset-2">

        <h1>{{$productOption->name}} detailed info</h1>

        @include('information-table', ['entity' => $productOption])
    </div>
@endsection