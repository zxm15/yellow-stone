@extends('app')

@section('content')
    {!! Form::open(['url' => 'company']) !!}
        @include('company._form', ['submitButton' => 'Update Article'])

    {!! Form::close() !!}
@endsection

