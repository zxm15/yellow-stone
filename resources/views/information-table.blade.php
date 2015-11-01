<table class="table table-striped information-table">
    <tbody>
    @foreach($entity['attributes'] as $key => $value)
        @unless(strcmp($key,"created_at") == 0 || strcmp($key, "updated_at") == 0)
            <tr>
                <td class="col-xs-4 table-key">{{$key}}</td>
                <td class="table-value">{{$value}}</td>
            </tr>
        @endunless
    @endforeach
    </tbody>
</table>