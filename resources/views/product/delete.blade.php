@extends('app')
@section('crud')
    <li><a href="{{ url('product') }}">Product</a></li>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 style="color:darkgoldenrod">Delete {{$product->name}} information</h1>
        </div>

        {!! Form::model($product, ['method' => 'DELETE', 'url' => 'product/'.$product->product_id]) !!}
        @include('product._form', ['submitButtonText' => 'Destroy product'])

        {!! Form::close() !!}

    </div>

@endsection