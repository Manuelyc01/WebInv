<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Producto industrial </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('imagenListado') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Listado', 1, 'imagenListado' , isset($element) ? $element->imagenListado : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('imagenFondo') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Fondo', 1, 'imagenFondo' , isset($element) ? $element->imagenFondo : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('imagenFondoMobile') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Fondo Mobile', 1, 'imagenFondoMobile' , isset($element) ? $element->imagenFondoMobile : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('imagenBeneficios') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Beneficios', 1, 'imagenBeneficios' , isset($element) ? $element->imagenBeneficios : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('imagenBeneficios2') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen Beneficios 2', 1, 'imagenBeneficios2' , isset($element) ? $element->imagenBeneficios2 : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            {!! Form::stdText('Nombre', 1, 'nombre', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('des') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'des', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('fichaPDF') ? 'has-error' : '' }}">
            {!! Form::stdImg('Ficha PDF', 0, 'fichaPDF' , isset($element) ? $element->fichaPDF : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('tituloRelacionados') ? 'has-error' : '' }}">
            {!! Form::stdText('Título Relacionados', 1, 'tituloRelacionados', $errors) !!}
        </div>

        {{-- productos relacionados --}}
        <div class="form-group {{ $errors->has('ProductosIndustrialesRelacionados') ? 'has-error' : '' }}">
            {!! Form::stdSelectMultiple('Productos Relacionados', 0, 'ProductosIndustrialesRelacionados', $productos, null, 'multiple') !!}                
        </div>

        <div class="form-group {{ $errors->has('subcat_indus_id') ? 'has-error' : '' }}" >
            {!! Form::stdSelect('Etiqueta', 1, 'subcat_indus_id', $ddlSubcatIndustrial, null) !!}
        </div>

        <div class="form-group {{ $errors->has('etiqueta_indus_id') ? 'has-error' : '' }}" >
            {!! Form::stdSelect('Categoría', 1, 'etiqueta_indus_id', $ddlEtiquetaIndustrial, null) !!}
        </div>
        
        <div class="form-group {{ $errors->has('check_exportacion') ? 'has-error' : '' }}" >
            {!! Form::stdSelect('Exportación', 0, 'check_exportacion', $ddlExportacion, null) !!}
        </div>

        <div class="form-group {{ $errors->has('enlaceFacebook') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Facebook', 0, 'enlaceFacebook', $errors) !!}
        </div>
        
        <div class="form-group {{ $errors->has('enlaceInstagram') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Instagram', 0, 'enlaceInstagram', $errors) !!}
        </div>


        {{-- arrayPresentaciones --}}
        <div class="form-group {{ $errors->has('arrayPresentaciones') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Presentaciones <label class="required">*</label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item1">
                    @if (isset($element)&& $element->arrayPresentaciones)
                        @foreach ($element->arrayPresentaciones as $el)                        
                            {!! Form::arrayTextoImgImgImg('Imagen', 'img1A', $loop->index, $el['img1A'], 'Imagen', 'img2A', $loop->index, $el['img2A'],'Imagen', 'img3A', $loop->index, $el['img3A'],'Texto', $el['texto1A']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item1">Añadir +</button>
            </div>
        </div>

        {{-- arrayBeneficios --}}
        <div class="form-group {{ $errors->has('arrayBeneficios') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Beneficios <label class="required">*</label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item2">
                    @if (isset($element)&& $element->arrayBeneficios)
                        @foreach ($element->arrayBeneficios as $el)                        
                            {!! Form::arrayTextoTexto2('Nro.', $el['txt1A'], 'Descripción', $el['txt2A']) !!}
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