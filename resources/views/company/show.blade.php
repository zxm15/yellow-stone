@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="color:darkgoldenrod">{{$company->name}} detailed info</h1>
        </div>
        @foreach($company['attributes'] as $key => $value)
            @unless(strcmp($key,"company_id") == 0)
                <div class="col-md-3 col-md-offset-3 text-left">
                    <h3 style="color:darkred">{{$key}}</h3>
                </div>
                <div class="col-md-3 text-right">
                    <h3 style="color:darkgreen">{{$value}}</h3>
                </div>
            @endunless
        @endforeach
    </div>
@endsection