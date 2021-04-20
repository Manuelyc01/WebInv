<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
        <div class="panel-heading">
            <h3 class="panel-title form-title"> Crear & Editar - Servicio </h3>
            <div class="panel-control">
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
            </div>
        </div>
        <div class="panel-body form-horizontal">

            <div class="form-group {{ $errors->has('fechaFin') ? 'has-error' : '' }}">
                {!! Form::stdDate('Fecha Límite', 1, 'fechaFin', $errors ) !!}
            </div>
    
            <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
                {!! Form::stdText('Título', 1, 'titulo', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('des') ? 'has-error' : '' }}">
                {!! Form::stdCKEditor('Descripción', 1, 'des', $errors) !!}
            </div>

            <div class="form-group {{ $errors->has('tipo') ? 'has-error' : '' }}">
                {!! Form::stdText('Tipo', 1, 'tipo', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                {!! Form::stdText('Url', 1, 'url', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('pdf') ? 'has-error' : '' }}">
                {!! Form::stdImg('PDF', 1, 'pdf' , isset($element) ? $element->pdf : '' , $errors, 'AAAxBBB (px)') !!}
            </div>

            <div class="form-group {{ $errors->has('departamento_id') ? 'has-error' : '' }}" >
                {!! Form::stdSelect('Departamento', 1, 'departamento_id', $ddlDepartamento, null) !!}
            </div>

            <div class="form-group {{ $errors->has('cate_servicio_id') ? 'has-error' : '' }}" >
                {!! Form::stdSelect('Categoria servicio', 1, 'cate_servicio_id', $ddlCate, null) !!}
            </div>

            {{-- tipo es un select FALTA --}}
    
        </div>
    
        <div class="panel-footer text-right">
            <strong> <span class="required"> * </span> Campos obligatorios </strong>
        </div>
    
    </div>