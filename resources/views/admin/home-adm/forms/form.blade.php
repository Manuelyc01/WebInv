<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Home - Bloque Dos - Conócenos </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">        

        <div class="form-group {{ $errors->has('tituloB2') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB2' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('desB2') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desB2', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('textoBtnB2') ? 'has-error' : '' }}">
            {!! Form::stdText('Texto Botón' , 1 , 'textoBtnB2' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imgIzqB2') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen izquierda', 1, 'imgIzqB2' , isset($element) ? $element->imgIzqB2 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('imgDerB2') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen derecha', 1, 'imgDerB2' , isset($element) ? $element->imgDerB2 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Home - Bloque tres -  productos</h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('tituloB3') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB3' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('subtituloB3') ? 'has-error' : '' }}">
            {!! Form::stdText('Subtítulo' , 1 , 'subtituloB3' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imgHojaB3') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen hoja', 1, 'imgHojaB3' , isset($element) ? $element->imgHojaB3 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Home - Bloque cuatro </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        

        <div class="form-group {{ $errors->has('tituloB4') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB4' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imgFondoB4') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Fondo', 1, 'imgFondoB4' , isset($element) ? $element->imgFondoB4 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>


    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Home - Bloque cinco - Video </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">


        <div class="form-group {{ $errors->has('coverVideoB4') ? 'has-error' : '' }}">
            {!! Form::stdImg('Cover Video', 1, 'coverVideoB4' , isset($element) ? $element->coverVideoB4 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('enlaceVideoB4') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Video' , 0 , 'enlaceVideoB4' , $errors, 'ingrese enlace de video Youtube') !!}
        </div>

        <div class="form-group {{ $errors->has('desB4') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desB4', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('textoBtnB4') ? 'has-error' : '' }}">
            {!! Form::stdText('Text Botón' , 1 , 'textoBtnB4' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imgHojaB5') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Hoja', 1, 'imgHojaB5' , isset($element) ? $element->imgHojaB5 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Home - Bloque seis - Blog </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        

        <div class="form-group {{ $errors->has('tituloB5') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB5' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('subtituloB5') ? 'has-error' : '' }}">
            {!! Form::stdText('Subtítulo' , 1 , 'subtituloB5' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('textoBtnB5') ? 'has-error' : '' }}">
            {!! Form::stdText('Texto Botón' , 1 , 'textoBtnB5' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('enlaceBtnB5') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Botón' , 1 , 'enlaceBtnB5' , $errors) !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Home - Bloque Siete - Formulario Suscripción </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('tituloB6') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB6' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('placeHolderB6') ? 'has-error' : '' }}">
            {!! Form::stdText('Placeholder' , 1 , 'placeHolderB6' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('textoBtnB6') ? 'has-error' : '' }}">
            {!! Form::stdText('Texto Botón' , 1 , 'textoBtnB6' , $errors) !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

    </div>