@extends('app')

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 style="color:darkgoldenrod">Delete {{$company->name}} information</h1>
        </div>

        {!! Form::model($company, ['method' => 'DELETE', 'url' => 'company/'.$company->company_id]) !!}
        @include('company._form', ['submitButtonText' => 'Destroy Company'])

        {!! Form::close() !!}

    </div>

@endsection