<div class="form-group">
    {!! Form::Label('company_id', 'Company ID') !!}
    {!! Form::text('company_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('category', 'Category') !!}
    {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
