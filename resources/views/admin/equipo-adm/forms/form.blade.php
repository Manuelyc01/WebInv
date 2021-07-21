<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - EQUIPOS </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        
        <div class="form-group">
			{!! Form::stdText('Serie', 0 , 'serie_equipo', $errors) !!}
		</div>

        <div class="form-group {{ $errors->has('cod_opatrimonial') ? 'has-error' : '' }}">
            {!! Form::stdText('Código Patrimonial', 0, 'cod_opatrimonial', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('des_equipo') ? 'has-error' : '' }}">
            {!! Form::stdText('Descripcion', 0, 'des_equipo', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('tipoBien') ? 'has-error' : '' }}">
            {!! Form::stdText('Tipo Bien', 0, 'tipoBien', $errors) !!}
        </div>
        <div class="form-group {{ $errors->has('id_cat_equipos') ? 'has-error' : '' }}">
            {!! Form::stdNumber('Categoria', 1, 'id_cat_equipos', $errors) !!}
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Imagenes</strong></label>
            <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">

        </div>  
            

    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>