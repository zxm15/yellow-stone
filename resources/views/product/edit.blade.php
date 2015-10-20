@extends('app')

@section('content')
    <h1>Edit {{$product->name}} information</h1>
    {!! Form::model($product, ['method' => 'PATCH', 'url' => 'product/'.$product->product_id]) !!}
        @include('product._form', ['submitButtonText' => 'Update Product'])
    {!! Form::close() !!}
@endsection