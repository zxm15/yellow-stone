@extends('app')

@section('content')
    <h1>{{$company->name}} detailed info</h1>
    @foreach($company['attributes'] as $key => $value)
        <h2 style="color:red">{{$key}}</h2>
        <h3 style="color:green">{{$value}}</h3>
    @endforeach

@endsection