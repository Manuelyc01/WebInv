@extends('adminems::panel')
 @section('content')
    <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Transferir Equipo </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
    <form method="POST" action="/web-adm/ofiTrabajadorEquipo-adm/transf/{{$element->id_ofi_traba_equipo}}" accept-charset="UTF-8" id="admin-form" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('POST') }}    
    <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <label><strong> HostName</strong></label>
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="no_equipo" type="text" value="{{$element->no_equipo}}"disabled>
            </div>
            <div class="col-sm-4">
                <label><strong> Sistema Operativo</strong></label>
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="sis_operativo" type="text" value="{{$element->sis_operativo}}" disabled>
            </div>
		</div>
        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Observaciones anteriores</strong></label>
            <div class="col-sm-8">
                    <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="estado_equipo" type="text" value="{{$element->estado_equipo}}"disabled>
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Estado </strong></label>
            @if($element->esta_ofi_traba_equipo==-1 || $element->esta_ofi_traba_equipo==0 )
            <div class="col-sm-3">
                <input style="background-color: red;color:white;" class="form-control" placeholder="" type="text" value="NO ASIGNADO" disabled>
            </div> 
            @else
            <div class="col-sm-3">
                <input style="background-color: green;color:white;" class="form-control" placeholder="" type="text" value="ASIGNADO" disabled>
            </div> 
            @endif
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
			    <label><strong> Equipo</strong></label>
                <input class="form-control" data-toggle="tooltip" data-placement="right" data-trigger="focus" type="text" value="{{$element->tipoBien}}"disabled>
            </div>
            <div class="col-sm-5">
                <label><strong> Colaborador</strong></label>
                <input class="form-control" data-toggle="tooltip" data-placement="right" data-trigger="focus" type="text" value="{{ $element->no_colaborador }}{{ $element->ap_paterno_colaborador }}(UBI.{{ $element->no_sede }}--{{ $element->no_oficina }})"disabled>
            </div>
        </div>
        <br>
        <div class="form-group {{ $errors->has('id_ofi_trabajador') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Colaborador<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="datalistOptionsColaborador" name="id_ofi_trabajador" id="id_ofi_trabajador" placeholder="Buscar Colaborador" value="{{@$element->id_ofi_trabajador}}" autocomplete="off">
                <datalist id="datalistOptionsColaborador" >
                    @foreach($trabajadores as $trabajador)
                        <option value="{{@$trabajador->id_ofi_trabajador}}">{{@$trabajador->no_colaborador}}&nbsp;{{@$trabajador->ap_paterno_colaborador}}&nbsp;(UBI.{{@$trabajador->no_sede}}--{{@$trabajador->no_oficina}})</option>
                    @endforeach
                </datalist>
            </div>
        </div>
        <div class="form-group {{ $errors->has('estado_equipo') ? 'has-error' : '' }}">
                {!! Form::stdText('Observaciones de Transferencia', 1, 'estado_equipo', $errors) !!}
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Imagenes<span class="required"> * </span></strong></label>
            <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Documentos<span class="required"> * </span></strong></label>
            <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept=".pdf,.doc,.docx,.xlsx">
        </div> 
        @if($element->esta_ofi_traba_equipo==1)
        <button id="submit-btn" class="btn btn-success btn-addon m-b-sm" disabled><i class="glyphicon glyphicon-floppy-disk"></i>
            <b>Guardar cambios</b> 
        </button>
        @endif
    </form>
    </div>
<script>
    $(document).ready(function() {
        var idx= document.getElementById('id_ofi_trabajador').value;
        $("#id_ofi_trabajador").on("input", function(event) {
            var colb= this.value;
            if(colb==idx){
                $("#submit-btn").prop('disabled', true);
            }else{
                $("#submit-btn").prop('disabled', false);
            }
        });
    });
</script>
@stop
