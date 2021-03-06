@extends('app')
@section('crud')
    <li><a href="{{ url('company') }}">Company</a></li>
    <li><a href="{{ url('product') }}">Product</a></li>
    <li><a href="{{ url('product-option') }}">Product Option</a></li>
    <li><a href="{{ url('campaign') }}">Campaign</a></li>
    <li><a href="{{ url('customer') }}">Customer</a></li>
    <li><a href="{{ url('media') }}">Media</a></li>
    <li><a href="{{ url('promotion') }}">Promotion</a></li>
    <li><a href="{{ url('order') }}">Sale</a></li>
@endsection
@section('background')
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="margin-top: -20px;" role="listbox">

                <div class="item active">
                    <img src="images/empire-state.jpg" alt="empire-state" style="width: 100%;">
                </div>

                <div class="item">
                    <img src="images/big-ben.jpg" alt="big-ben" style="width: 100%;">
                </div>

                <div class="item">
                    <img src="images/eiffel-tower.jpg" alt="eiffel-tower" style="width: 100%;">
                </div>


            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
@endsection



