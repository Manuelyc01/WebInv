<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - SEDES </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        <div class="form-group {{ $errors->has('co_sede') ? 'has-error' : '' }}">
            {!! Form::stdText('Código', 1, 'co_sede', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('no_sede') ? 'has-error' : '' }}">
            {!! Form::stdText('Nombre', 0, 'no_sede', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('de_sede') ? 'has-error' : '' }}">
            {!! Form::stdText('Descripcion', 0, 'de_sede', $errors) !!}
        </div>
        

    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>