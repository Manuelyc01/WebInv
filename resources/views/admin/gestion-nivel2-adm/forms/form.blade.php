<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Gestión nivel 2 </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('gestion_nivel1_id') ? 'has-error' : '' }}" >
            {!! Form::stdSelect('Gestión nivel 1', 1, 'gestion_nivel1_id', $ddlGestionNivel1, null) !!}
        </div>

        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
            {!! Form::stdText('Título', 1, 'titulo', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('des') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 0, 'des', $errors) !!}
        </div>

        {{-- array --}}
        <div class="form-group {{ $errors->has('array') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Archivos <label class="required"></label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item1">
                    @if (isset($element)&& $element->array)
                        @foreach ($element->array as $el)                        
                            {!! Form::arrayArchivoTexto('PDF','archivo1A',$loop->index, $el['archivo1A'],'Nombre', $el['texto2A']) !!}
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