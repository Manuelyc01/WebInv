@section('cssAdicional')
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--imagenes-->
 @stop

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - COMPONENTES </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        
        <div class="form-group">
			{!! Form::stdText('Serie', 0 , 'serie_componente', $errors) !!}
		</div>
        <div class="form-group {{ $errors->has('des_equipo') ? 'has-error' : '' }}">
            {!! Form::stdText('Descripcion', 0, 'des_componente', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('esta_componente') ? 'has-error' : '' }}">
            <?php $estado=["1"=>"ACTIVO","0"=>"DESACTIVADO","2"=>"ASIGNADO"] ?>
            {!! Form::stdSelect('estado', 0, 'esta_componente', $estado,NULL) !!}
        </div>
        <div class="form-group">
            {!! Form::stdSelect('Categoria', 1, 'id_cat_componentes',$catCompo, null) !!}
        </div>
        @if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3)
        <div class="form-group {{ $errors->has('id_colaborador') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Administrador<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="listColaborador"  name="id_ofi_trabajador" placeholder="Busca Administrador" autocomplete="off" value="{{@$element->id_ofi_trabajador}}" required>
                <datalist id="listColaborador">
                    @foreach($colaboradores as $colaboradore)
                        <option  value="{{@$colaboradore->id_ofi_trabajador}}">{{@$colaboradore->no_colaborador}}&nbsp;{{@$colaboradore->ap_paterno_colaborador}}&nbsp;{{@$colaboradore->ap_materno_colaborador}}<strong> &nbsp;{{@$colaboradore->de_sede}}</strong></option>
                    @endforeach
                </datalist>
                
            </div>
        </div>
        @endif
        @if(isset($imagenes))
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Imagenes de Entrega</strong></label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Archivos de Entrega Cargados</strong></label>
                <?php $cont=2; ?>
                @foreach($imagenes as $imagenen)
                <div class="col-sm-2" style="margin-top: 30px;margin-bottom: 30px;">
                    <embed type="text/mp4" src="{{$imagenen->url}}"  width="300" height="200">
                    <button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal">
                    <i class="glyphicon glyphicon-trash"></i> Eliminar </button>

                </div>
                <?php
                    if($cont==10){
                        print_r('<div class="col-sm-2"></div>');
                        $cont=2;
                    } 
                    else{
                        $cont+=2;
                    }
                ?>
                @endforeach
            </div>
            @foreach($imagenes as $imagenen)
            @endforeach
        @else
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Archivos de Entrega</strong></label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
                </div>
            </div>
        @endif
        @if(isset($documentos))
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Archivos de Entrega</strong></label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept="image/*">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Archivos de Entrega Cargados</strong></label>
                <?php $cont=2; ?>
                @foreach($documentos as $documento)
                <div class="col-sm-2" style="margin-top: 30px;margin-bottom: 30px;">
                    <embed type="text/mp4" src="{{@$documento->url}}"  width="300" height="200">

                    <button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal">
                    <i class="glyphicon glyphicon-trash"></i> Eliminar </button>

                    
                </div>
                <?php
                    if($cont==10){
                        print_r('<div class="col-sm-2"></div>');
                        $cont=2;
                    } 
                    else{
                        $cont+=2;
                    }
                ?>
                @endforeach
            </div>
        @else
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Archivos de Entrega</strong></label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept="image/*">
                </div>
            </div>
        @endif          
        
    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>
</div>
@section('jsAdicional')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('vendor/ems/js/main.js') }}"></script>
    
@stop