<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Sedes </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            {!! Form::stdText('Nombre', 1, 'nombre', $errors) !!}
        </div>

        {{-- arraySucursal --}}
        <div class="form-group {{ $errors->has('arraySucursal') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Sucursales <label class="required"></label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item1">
                    @if (isset($element)&& $element->arraySucursal)
                        @foreach ($element->arraySucursal as $el)                        
                            {!! Form::array6TextosSucursal('Nombre', $el['txt1A'], 'Lugar', $el['txt2A'], 'Dirección', $el['txt3A'], 'Teléfono', $el['txt4A'], 'Correo', $el['txt5A'], 'Google Maps', $el['txt6A']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item1">Añadir +</button>
            </div>
        </div>

        {{-- arrayAgencia --}}
        <div class="form-group {{ $errors->has('arrayAgencia') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Agencias <label class="required"></label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item2">
                    @if (isset($element)&& $element->arrayAgencia)
                        @foreach ($element->arrayAgencia as $el)                        
                            {!! Form::array6TextosAgencia('Nombre', $el['t1A'], 'Lugar', $el['t2A'], 'Dirección', $el['t3A'], 'Teléfono', $el['t4A'], 'Correo', $el['t5A'], 'Google Maps', $el['t6A']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item2">Añadir +</button>
            </div>
        </div>

        {{-- arrayUnidad --}}
        <div class="form-group {{ $errors->has('arrayUnidad') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"> <strong> Unidad <label class="required"></label></strong> </label>
            <div class="col-sm-8 equipo-tres-array">
                <div class="collection only-for-array item3">
                    @if (isset($element)&& $element->arrayUnidad)
                        @foreach ($element->arrayUnidad as $el)                        
                            {!! Form::array6TextosUnidad('Nombre', $el['tx1A'], 'Lugar', $el['tx2A'], 'Dirección', $el['tx3A'], 'Teléfono', $el['tx4A'], 'Correo', $el['tx5A'], 'Google Maps', $el['tx6A']) !!}
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-info add-to-collection-item3">Añadir +</button>
            </div>
        </div>

        <div class="form-group {{ $errors->has('imagenMapa') ? 'has-error' : '' }}">
            {!! Form::stdImg('Imagen mapa', 1, 'imagenMapa' , isset($element) ? $element->imagenMapa : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>