@extends('app')

@section('content')
    <h1>List of companies</h1>
    @if(! empty($companies))
        <ul>
            @foreach($companies as $company)
                <li><a href="{{url('/company', $company->company_id)}}">{{$company->name}}</a></li>
            @endforeach
        </ul>
    @endif
@endsection()