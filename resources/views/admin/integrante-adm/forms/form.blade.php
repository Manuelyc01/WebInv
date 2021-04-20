<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Integrante </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('orden') ? 'has-error' : '' }}">
            {!! Form::stdNumber('Orden', 1, 'orden', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imagen') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen', 0, 'imagen' , isset($element) ? $element->imagen : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('nombreCompleto') ? 'has-error' : '' }}">
            {!! Form::stdText('NombreCompleto', 1, 'nombreCompleto', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('cargo_id') ? 'has-error' : '' }}" >
            {!! Form::stdSelect('Cargo', 1, 'cargo_id', $ddlCargo, null) !!}
        </div>

        <div class="form-group {{ $errors->has('niveles_id') ? 'has-error' : '' }}" >
            {!! Form::stdSelect('Niveles', 1, 'niveles_id', $ddlNiveles, null) !!}
        </div>

        <div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
            {!! Form::stdText('Telefono', 0, 'telefono', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('correo') ? 'has-error' : '' }}">
            {!! Form::stdText('Correo', 0, 'correo', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('direccion') ? 'has-error' : '' }}">
            {!! Form::stdText('Dirección', 0, 'direccion', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('des') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 0, 'des', $errors) !!}
        </div>

    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>