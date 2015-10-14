@extends('app')

@section('content')
    <h1>Edit {{$company->name}} info</h1>
    {!! Form::model($company, ['method' => 'PATCH', 'url' => 'company/'.$company->company_id]) !!}
        @include('company._form', ['submitButtonText' => 'Update Company'])

    {!! Form::close() !!}
@endsection
