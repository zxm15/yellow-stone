@extends('app')
@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1>Create a new customer</h1>
        </div>
        {!! Form::open(['url' => 'customer']) !!}
            @include('customer._form', ['submitButtonText' => 'Add customer'])
        {!! Form::close() !!}
    </div>

@endsection