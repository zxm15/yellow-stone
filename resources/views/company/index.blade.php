@extends('app')

@section('crud')
    <li><a href="{{action('CompanyController@create')}}">Create</a></li>
@endsection
@section('content')
    <div class="row text-center">
        <h1>List of companies</h1>
        @if(! empty($companies))

            @foreach($companies as $company)
                <div class="col-xs-12">
                    <a href="{{url('/company', $company->company_id)}}"><h2>{{$company->name}}</h2></a>
                </div>

            @endforeach

        @endif
    </div>

@endsection()