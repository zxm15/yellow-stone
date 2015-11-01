@extends('app')

@section('crud')
    <li><a href="{{ url('product') }}">Product</a></li>
    <li><a href="{{ url('product/'.$product->product_id.'/edit') }}">Edit</a></li>
    {{--<li><a href="{{ action('ProductController@delete', ['id' => $product->product_id]) }}">Delete</a></li>--}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>{{$product->name}} detailed info</h1>
        </div>
        <table class="table, table-striped information-table">
            <tbody>
            @foreach($product['attributes'] as $key => $value)
                @unless(strcmp($key,"created_at") == 0 || strcmp($key, "updated_at") == 0)
                    <tr>
                        <th>{{$key}}</th>
                        <th>{{$value}}</th>
                    </tr>
                @endunless
            @endforeach
            </tbody>

        </table>
    </div>
@endsection