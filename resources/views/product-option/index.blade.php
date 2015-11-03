@extends('app')

@section('crud')
    <li><a href="{{action('ProductOptionController@create')}}">Create</a></li>
@endsection
@section('content')
    <div class="row text-center">
        <h1>List of product options</h1>
        @if(! empty($productOptions))

            @foreach($productOptions as $productOption)
                <div class="col-xs-12">
                    <a href="{{url('/product-option', $productOption->product_options_id)}}"><h2>{{$productOption->name}}</h2></a>
                </div>

            @endforeach

        @endif
    </div>

@endsection()