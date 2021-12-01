<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Categoria Solicitudes </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        
        <div class="form-group {{ $errors->has('cod_solicitud') ? 'has-error' : '' }}">
            {!! Form::stdText('Cod.Solicitud', 1, 'cod_solicitud', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('nom_solicitud') ? 'has-error' : '' }}">
            {!! Form::stdText('Nombre', 0, 'nom_solicitud', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('esta_solicitud') ? 'has-error' : '' }}">
            <!-- {!! Form::stdText('Estado', 1, 'esta_solicitud', $errors) !!}-->
            <?php
            $ddlDepartamento=["1"=>"Activo","0"=>"Inactivo"];
            ?>
            {!! Form::stdSelect('Estado', 1, 'esta_solicitud', $ddlDepartamento, null) !!}
        </div>
        
    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>


</div>