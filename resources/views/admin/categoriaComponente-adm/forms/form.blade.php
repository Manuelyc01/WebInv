<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - CATEGORIA COMPONENTE EQUIPO </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        
        <div class="form-group {{ $errors->has('des_cate_componentes') ? 'has-error' : '' }}">
            {!! Form::stdText('Descripcion', 1, 'des_cate_componentes', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('esta_cate_componentes') ? 'has-error' : '' }}">
            <!-- {!! Form::stdText('Estado', 1, 'esta_cate_componentes', $errors) !!}-->
            <?php
            $ddlDepartamento=["1"=>"ACTIVO","0"=>"DESACTIVADO"];
            ?>
            {!! Form::stdSelect('Estado', 1, 'esta_cate_componentes', $ddlDepartamento, null) !!}
        </div>
        

    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>


</div>