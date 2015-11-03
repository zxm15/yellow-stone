@extends('app')
@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 style="color:darkgoldenrod">Create a new product option</h1>
        </div>
        {!! Form::open(['url' => 'product-option']) !!}
        @include('product-option._form', ['submitButtonText' => 'Add product option'])
        {!! Form::close() !!}
    </div>

@endsection