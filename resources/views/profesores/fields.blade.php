<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre(s):') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno', 'Apellido Paterno:') !!}
    {!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno', 'Apellido Materno:') !!}
    {!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Division Field -->
<div class="form-group col-sm-6">
    {!! Form::label('division', 'Division:') !!}
    {!! Form::select('division', ['DIVEC' => 'DIVEC', 'Basicas' => 'Basicas', 'Ingenierias' => 'Ingenierias'], null, ['class' => 'form-control']) !!}
</div>

<!-- Reputacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reputacion', 'Reputacion:') !!}
    {!! Form::number('reputacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('profesores.index') }}" class="btn btn-default">Cancel</a>
</div>
