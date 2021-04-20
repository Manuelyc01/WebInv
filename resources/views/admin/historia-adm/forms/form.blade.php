<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Historia - Bloque Uno </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('tituloB1') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB1' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('desB1') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desB1', $errors) !!}
        </div>

        {{-- arrayB1 --}}
        <div class="form-group {{ $errors->has('arrayB1') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Valores <label class="required">*</label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item1">
                    @if (isset($element)&& $element->arrayB1)
                        @foreach ($element->arrayB1 as $el)                        
                            {!! Form::arrayArchivoArchivoTexto('Imagen','archivo1A', $loop->index, $el['archivo1A'], 'Imagen Hover','archivo2A', $loop->index, $el['archivo2A'],'Texto', $el['texto3A']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item1">Añadir +</button>
            </div>
        </div>

        <div class="form-group {{ $errors->has('imagenIzqB1') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen izquierda', 1, 'imagenIzqB1' , isset($element) ? $element->imagenIzqB1 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('imagenDerB1') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen derecha', 1, 'imagenDerB1' , isset($element) ? $element->imagenDerB1 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Historia - Bloque Dos - Misión </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('tituloMisionB2') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloMisionB2' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('subtituloMisionB2') ? 'has-error' : '' }}">
            {!! Form::stdText('Subtítulo' , 1 , 'subtituloMisionB2' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('desMisionB2') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desMisionB2', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imgHojaIzqB2') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Hoja Izq.', 1, 'imgHojaIzqB2' , isset($element) ? $element->imgHojaIzqB2 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Historia - Bloque Dos - Visión </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('tituloVisionB2') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 0 , 'tituloVisionB2' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('subtituloVisionB2') ? 'has-error' : '' }}">
            {!! Form::stdText('Subtitulo' , 0 , 'subtituloVisionB2' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('desVisionB2') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desVisionB2', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imgHojaDerB2') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Hoja Der.', 1, 'imgHojaDerB2' , isset($element) ? $element->imgHojaDerB2 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Historia - Bloque Tres - Línea de Tiempo</h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('tituloB3') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 0 , 'tituloB3' , $errors) !!}
        </div>

        {{-- arrayB3 --}}
        <div class="form-group {{ $errors->has('arrayB3') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Eventos <label class="required">*</label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item2">
                    @if (isset($element)&& $element->arrayB3)
                        @foreach ($element->arrayB3 as $el)                        
                            {!! Form::arrayImgTextoTextoDes('Imagen','imgA', $loop->index, $el['imgA'],'Año', $el['tx1A'],'Título', $el['tx2A'],'Descripción', $el['txDesA']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item2">Añadir +</button>
            </div>
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Historia - Bloque Cuatro - SERVICIO DE CALIDAD </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        
        <div class="form-group {{ $errors->has('tituloB4') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB4' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('desB4') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desB4', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('imgB4') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Derecha', 1, 'imgB4' , isset($element) ? $element->imgB4 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        {{-- arrayB4 --}}
        <div class="form-group {{ $errors->has('arrayB4') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Certificados <label class="required">*</label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item3">
                    @if (isset($element)&& $element->arrayB4)
                        @foreach ($element->arrayB4 as $el)                        
                            {!! Form::arraySoloUnArchivo('Imagen','archivoOne1A', $loop->index, $el['archivoOne1A']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item3">Añadir +</button>
            </div>
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Historia - Bloque Cinco - Productos</h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('tituloB5') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'tituloB5' , $errors) !!}
        </div>

        <h3>Tradicional</h3>

        <div class="form-group {{ $errors->has('textoBtn1B5') ? 'has-error' : '' }}">
            {!! Form::stdText('Texto Botón' , 1 , 'textoBtn1B5' , $errors) !!}
        </div>

        {{-- array1B5 --}}
        <div class="form-group {{ $errors->has('array1B5') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Galería <label class="required">*</label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item4">
                    @if (isset($element)&& $element->array1B5)
                        @foreach ($element->array1B5 as $el)                        
                            {!! Form::arraySoloUnArchivo1('Imagen','archivoOne1A1', $loop->index, $el['archivoOne1A1']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item4">Añadir +</button>
            </div>
        </div>

        <div class="form-group {{ $errors->has('titulo1B5') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 1 , 'titulo1B5' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('subtitulo1B5') ? 'has-error' : '' }}">
            {!! Form::stdText('Subtítulo' , 1 , 'subtitulo1B5' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('des1B5') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'des1B5', $errors) !!}
        </div>

        <h3>Industrial</h3>

        <div class="form-group {{ $errors->has('textoBtn2B5') ? 'has-error' : '' }}">
            {!! Form::stdText('Texto Botón' , 1 , 'textoBtn2B5' , $errors) !!}
        </div>

        {{-- array2B5 --}}
        <div class="form-group {{ $errors->has('array2B5') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Galería <label class="required">*</label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item5">
                    @if (isset($element)&& $element->array2B5)
                        @foreach ($element->array2B5 as $el)                        
                            {!! Form::arraySoloUnArchivo2('Imagen','archivoOne1A2', $loop->index, $el['archivoOne1A2']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item5">Añadir +</button>
            </div>
        </div>

        <div class="form-group {{ $errors->has('titulo2B5') ? 'has-error' : '' }}">
            {!! Form::stdText('Título' , 0 , 'titulo2B5' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('subtitulo2B5') ? 'has-error' : '' }}">
            {!! Form::stdText('Subtítulo' , 0 , 'subtitulo2B5' , $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('des2B5') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'des2B5', $errors) !!}
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>