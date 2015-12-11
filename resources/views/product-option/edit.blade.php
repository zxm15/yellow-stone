@extends('app')

@section('crud')
    <li><a href="{{ url('product-option') }}">Product Option</a></li>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 style="color:darkgoldenrod">Edit {{$productOption->name}} information</h1>
        </div>

        {!! Form::model($productOption, ['method' => 'PATCH', 'url' => 'product-option/'.$productOption->product_options_id]) !!}
        @include('product-option._form', ['submitButtonText' => 'Update product option'])

        {!! Form::close() !!}

    </div>

@endsection
