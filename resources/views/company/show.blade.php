@extends('app')

@section('crud')
    <li><a href="{{ url('company') }}">Company</a></li>
    <li><a href="{{ url('company/'.$company->company_id.'/edit') }}">Edit</a></li>
    <li><a href="{{ action('CompanyController@delete', ['id' => $company->company_id]) }}">Delete</a></li>
@endsection
@section('content')

    <div class="row col-md-8 col-md-offset-2">

        <h1>{{$company->name}} detailed info</h1>

        @include('information-table', ['entity' => $company])
    </div>
@endsection

