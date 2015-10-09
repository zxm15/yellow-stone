@extends('app')

@section('content')
    <h1>List of companies</h1>
    @if(! empty($companies))
        <ul>
            @foreach($companies as $company)
                <li>{!! $company->name !!}</li>
            @endforeach
        </ul>
    @endif
@endsection()