<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
        <div class="panel-heading">
            <h3 class="panel-title form-title"> Crear & Editar - Producto tradicional </h3>
            <div class="panel-control">
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
            </div>
        </div>
        <div class="panel-body form-horizontal">

            <div class="form-group {{ $errors->has('imagenListado') ? 'has-error' : '' }}">
                {!! Form::stdImg('Imagen Listado', 1, 'imagenListado' , isset($element) ? $element->imagenListado : '' , $errors, 'AAAxBBB (px)') !!}
            </div>

            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                {!! Form::stdText('Nombre', 1, 'nombre', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('des') ? 'has-error' : '' }}">
                {!! Form::stdCKEditor('Descripción', 1, 'des', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('zonaVenta') ? 'has-error' : '' }}">
                {!! Form::stdText('Zona venta', 1, 'zonaVenta', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('tituloRelacionados') ? 'has-error' : '' }}">
                {!! Form::stdText('Título Relacionados', 1, 'tituloRelacionados', $errors) !!}
            </div>

            {{-- productos relacionados --}}
            <div class="form-group {{ $errors->has('ProductosTradicionalesRelacionados') ? 'has-error' : '' }}">
                {!! Form::stdSelectMultiple('Productos Relacionados', 0, 'ProductosTradicionalesRelacionados', $productos, null, 'multiple') !!}                
            </div>

            <div class="form-group {{ $errors->has('etiqueta_tradi_id') ? 'has-error' : '' }}" >
                {!! Form::stdSelect('Etiqueta', 1, 'etiqueta_tradi_id', $ddlEtiquetaTradicional, null) !!}
            </div>

            <div class="form-group {{ $errors->has('documento') ? 'has-error' : '' }}">
                {!! Form::stdImg('Documento', 0, 'documento' , isset($element) ? $element->documento : '' , $errors, 'AAAxBBB (px)') !!}
            </div>

            {{-- array --}}
            <div class="form-group {{ $errors->has('array') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label"> <strong> Presentaciones <label class="required">*</label></strong> </label>
                <div class="col-sm-8 equipo-tres-array">
                    <div class="collection only-for-array item1">
                        @if (isset($element)&& $element->array)
                            @foreach ($element->array as $el)                        
                                {!! Form::arrayTextoImgImgImg('Imagen', 'img1A', $loop->index, $el['img1A'], 'Imagen', 'img2A', $loop->index, $el['img2A'],'Imagen', 'img3A', $loop->index, $el['img3A'],'Texto', $el['texto1A']) !!}
                            @endforeach
                        @endif
                    </div>
                    <button type="button" class="btn btn-info add-to-collection-item1">Añadir +</button>
                </div>
            </div>
    
        </div>
    
        <div class="panel-footer text-right">
            <strong> <span class="required"> * </span> Campos obligatorios </strong>
        </div>
    
    </div>