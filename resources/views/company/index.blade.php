@extends('app')

@section('content')
    <div class="row text-center">
        <h1 style="color:darkgoldenrod">List of companies</h1>
        @if(! empty($companies))

            @foreach($companies as $company)
                <div class="col-xs-12">
                    <a href="{{url('/company', $company->company_id)}}"><h2>{{$company->name}}</h2></a>
                </div>

            @endforeach

        @endif
    </div>

@endsection()