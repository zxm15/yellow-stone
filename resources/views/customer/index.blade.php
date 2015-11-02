@extends('app')

@section('crud')
    <li><a href="{{action('CustomerController@create')}}">Create</a></li>
@endsection
@section('content')
    <div class="row text-center">
        <h1>List of customers</h1>
        @if(! empty($customers))

            @foreach($customers as $customer)
                <div class="col-xs-12">
                    <a href="{{url('/customer', $customer->customer_id)}}"><h2>{{$customer->first_name.' '.$customer->last_name}}</h2></a>
                </div>

            @endforeach

        @endif
    </div>

@endsection()