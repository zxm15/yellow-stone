@extends('app')
@section('content')
    <h1>Create a new company</h1>
    {!! Form::open(['url' => 'company']) !!}
    <div class="form-group">
        {!! Form::Label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('website', 'Website') !!}
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('phone', 'Phone') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('address1', 'Address1') !!}
        {!! Form::text('address1', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('address2', 'Address2') !!}
        {!! Form::text('address2', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('city', 'City') !!}
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('state', 'State') !!}
        {!! Form::text('state', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('country', 'Country') !!}
        {!! Form::text('country', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Company', ['class' => 'btn btn-primary form-control']) !!}
    </div>



    {!! Form::close() !!}
@endsection