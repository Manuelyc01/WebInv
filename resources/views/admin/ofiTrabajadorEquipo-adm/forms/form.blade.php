<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Asignación de Equipos </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        
        <div class="form-group">
        {!! Form::stdText('HostName', 0, 'no_equipo', $errors) !!}
		</div>

        <div class="form-group {{ $errors->has('sis_operativo') ? 'has-error' : '' }}">
            {!! Form::stdText('Sistema Operativo', 0, 'sis_operativo', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('estado_equipo') ? 'has-error' : '' }}">
            {!! Form::stdText('Observaciones del equipo', 0, 'estado_equipo', $errors) !!}
        </div>
        <div class="form-group {{ $errors->has('esta_ofi_traba_equipo') ? 'has-error' : '' }}">
            <?php
            $list=["2"=>"Activo","1"=>"Mantenimiento","0"=>"Baja"];
            ?>
            {!! Form::stdSelect('Estado', 1, 'esta_ofi_traba_equipo', $list, null) !!}
        </div>
        <div class="form-group {{ $errors->has('id_equipo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Equipo<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="datalistOptionsEquipo" name="id_equipo" id="id_equipo" placeholder="Buscar Equipo" value="{{@$element->id_equipo}}" autocomplete="off">
                <datalist id="datalistOptionsEquipo">
                    @foreach($equipos as $equipo)
                        <option value="{{@$equipo->id_equipo}}">{{@$equipo->tipoBien}}</option>
                    @endforeach
                </datalist>
            </div>
        </div>
        <div class="form-group {{ $errors->has('id_ofi_trabajador') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Colaborador<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="datalistOptionsColaborador" name="id_ofi_trabajador" id="id_ofi_trabajador" placeholder="Buscar Colaborador" value="{{@$element->id_ofi_trabajador}}" autocomplete="off">
                <datalist id="datalistOptionsColaborador">
                    @foreach($trabajadores as $trabajador)
                        <option value="{{@$trabajador->id_ofi_trabajador}}">{{@$trabajador->no_colaborador}}&nbsp;{{@$trabajador->ap_paterno_colaborador}}&nbsp;{{@$trabajador->ap_materno_colaborador}}</option>
                    @endforeach
                </datalist>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Imagenes</strong></label>
            <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Documentos</strong></label>
            <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept=".pdf,.doc,.docx,.xlsx">
        </div>

            

    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>
<script>
    $(document).ready(function() {
        $("#id_equipo").on("click", function(event) {
            $("#id_equipo").val("");
        });
    });
    $("#id_equipo").on('input', function () {
    var id_equipo = this.value;
    $("#submit-btn").prop('disabled', true);
    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/web-adm/ofiTrabajadorEquipoAjax-adm/'+id_equipo,
        success: function (data) {
            $("#submit-btn").prop('disabled', false);
                if(data.length==0){
                    document.getElementById('submit-btn').disabled = false;
                }else{
                    $("#id_equipo").val("");
                    alert("No puede asignar el equipo");
                    document.getElementById('submit-btn').disabled = true;
                }
            
        },
        error: function() { 
            console.log(data);
        }
    });
    
    
    });
</script>