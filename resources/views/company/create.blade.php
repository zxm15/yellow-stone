@extends('app')
@section('content')
    <h1>Create a new company</h1>
    {!! Form::open(['url' => 'company']) !!}
        @include('company._form', ['submitButtonText' => 'Add company'])
    {!! Form::close() !!}
@endsection