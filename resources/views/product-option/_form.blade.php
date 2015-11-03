<div class="form-group">
    {!! Form::Label('company_id', 'Company ID') !!}
    {!! Form::text('company_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('product_id', 'Product ID') !!}
    {!! Form::text('product_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('size', 'Size') !!}
    {!! Form::text('size', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('color', 'Color') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('sku', 'Sku') !!}
    {!! Form::text('sku', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('price', 'Price') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('shipping_price', 'Shipping Price') !!}
    {!! Form::text('shipping_price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('cost', 'Cost') !!}
    {!! Form::text('cost', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('description', 'Description') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('image', 'Image') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('advertisement', 'Advertisement') !!}
    {!! Form::text('advertisement', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif