<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Equipo </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'titulo' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('subtitulo') ? 'has-error' : '' }}">
            {!! Form::stdText('Subtítulo' , 1 , 'subtitulo' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('textoBtn') ? 'has-error' : '' }}">
            {!! Form::stdText('Texto Botón' , 1 , 'textoBtn' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imagen') ? 'has-error' : '' }}">
            {!! Form::stdImg('Organigrama' , 1 , 'imagen' , isset($element) ? $element->imagen : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>