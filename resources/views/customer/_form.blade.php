<div class="form-group">
    {!! Form::Label('first_name', 'First Name') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('last_name', 'Last Name') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('phone', 'Phone') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('address1', 'Address1') !!}
    {!! Form::text('address1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('address2', 'Address2') !!}
    {!! Form::text('address2', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('city', 'City') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('state', 'State') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('zip', 'Zip') !!}
    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('country', 'Country') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('birthday', 'Birthday') !!}
    {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('gender', 'Gender') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('occupation', 'Occupation') !!}
    {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('race', 'Race') !!}
    {!! Form::text('race', null, ['class' => 'form-control']) !!}
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