@extends('app')

@section('content')
    <h1>Edit {{$company->name}} info</h1>
    {!! Form::open(['url' => 'company']) !!}
        @include('company._form', ['submitButton' => 'Update Article'])

    {!! Form::close() !!}
@endsection

