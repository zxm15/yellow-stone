@extends('app')

@section('crud')
    <li><a href="{{action('ProductController@create')}}">Create</a></li>
@endsection
@section('content')
    <div class="row text-center">
        <h1>List of products</h1>
        @unless(empty($products))
            @foreach($products as $product)
                <h2><a href= "{{url('/product', $product->product_id)}}">{{$product->name}}</a></h2>
            @endforeach
        @endunless
    </div>
@endsection

