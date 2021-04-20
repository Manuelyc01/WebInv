<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Industrial - Listado </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('imagenFondoListado') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Fondo Listado', 1, 'imagenFondoListado' , isset($element) ? $element->imagenFondoListado : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('imagenCaladaListado') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Calada', 1, 'imagenCaladaListado' , isset($element) ? $element->imagenCaladaListado : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('tituloListado') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 0 , 'tituloListado' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('desListado') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desListado', $errors) !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Industrial - B1 </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('imagenFondo') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Fondo', 1, 'imagenFondo' , isset($element) ? $element->imagenFondo : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('tituloB1') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 0 , 'tituloB1' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('desB1') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desB1', $errors) !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>