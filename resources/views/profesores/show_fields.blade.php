<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $profesores->nombre }}</p>
</div>

<!-- Apellido Paterno Field -->
<div class="form-group">
    {!! Form::label('apellido_paterno', 'Apellido Paterno:') !!}
    <p>{{ $profesores->apellido_paterno }}</p>
</div>

<!-- Apellido Materno Field -->
<div class="form-group">
    {!! Form::label('apellido_materno', 'Apellido Materno:') !!}
    <p>{{ $profesores->apellido_materno }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $profesores->correo }}</p>
</div>

<!-- Division Field -->
<div class="form-group">
    {!! Form::label('division', 'Division:') !!}
    <p>{{ $profesores->division }}</p>
</div>

<!-- Reputacion Field -->
<div class="form-group">
    {!! Form::label('reputacion', 'Reputacion:') !!}
    <p>{{ $profesores->reputacion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $profesores->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $profesores->updated_at }}</p>
</div>

