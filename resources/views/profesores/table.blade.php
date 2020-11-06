<div class="table-responsive">
    <table class="table" id="profesores-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th>Division</th>
        <th>Reputacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profesores as $profesores)
            <tr>
                <td>{{ $profesores->nombre }}</td>
            <td>{{ $profesores->apellido_paterno }}</td>
            <td>{{ $profesores->apellido_materno }}</td>
            <td>{{ $profesores->correo }}</td>
            <td>{{ $profesores->division }}</td>
            <td>{{ $profesores->reputacion }}</td>
                <td>
                    {!! Form::open(['route' => ['profesores.destroy', $profesores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('profesores.show', [$profesores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('profesores.edit', [$profesores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estas seguro de eliminar este profesor?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
