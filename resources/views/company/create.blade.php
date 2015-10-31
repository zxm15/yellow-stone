@extends('app')
@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 style="color:darkgoldenrod">Create a new company</h1>
        </div>
        {!! Form::open(['url' => 'company']) !!}
        @include('company._form', ['submitButtonText' => 'Add company'])
        {!! Form::close() !!}
    </div>

@endsection