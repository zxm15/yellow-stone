@extends('app')

@section('content')
    <h1>Create a product</h1>
    {!! Form::open(array('url' => 'product')) !!}
        @include('product/_form', array('submitButtonText' => 'Add product'))
    {!! Form::close() !!}
@endsection()