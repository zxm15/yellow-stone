@extends('app')

@section('crud')
    <li><a href="{{ url('company') }}">Company</a></li>
    <li><a href="{{ url('company/'.$company->company_id.'/edit') }}">Edit</a></li>
    <li><a href="{{ action('CompanyController@delete', ['id' => $company->company_id]) }}">Delete</a></li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>{{$company->name}} detailed info</h1>
        </div>
        <table class="table, table-striped information-table">
            <tbody>
                @foreach($company['attributes'] as $key => $value)
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

