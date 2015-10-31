@extends('app')

@section('content')
    <div class="col-md-12 text-center">
        <h1 style="color:darkgoldenrod">{{$company->name}} detailed info</h1>
    </div>
    @foreach($company['attributes'] as $key => $value)
        <div class="col-md-3 col-md-offset-3 text-left">
            <h3 style="color:darkred">{{$key}}</h3>
        </div>
        <div class="col-md-3 text-right">
            <h3 style="color:darkgreen">{{$value}}</h3>
        </div>

    @endforeach

@endsection