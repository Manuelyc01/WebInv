<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Oficina Trabajor </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        <div class="form-group {{ $errors->has('id_colaborador') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Colaborador<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="datalistOptionsColaborador" id="datalistColaborador" name="co_colaborador" placeholder="Busca Colaborador" value="{{@$element->co_colaborador}}" autocomplete="off" >
                <datalist id="datalistOptionsColaborador">
                    @foreach($elements_colaboradores as $elements_colaboradore)
                        <option  value="{{@$elements_colaboradore->co_colaborador}}">{{@$elements_colaboradore->no_colaborador}}&nbsp;{{@$elements_colaboradore->ap_paterno_colaborador}}&nbsp;{{@$elements_colaboradore->ap_materno_colaborador}}</option>
                    @endforeach
                </datalist>
                
            </div>
        </div>
        <div class="form-group {{ $errors->has('esta_cate_equipo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Sede<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="datalistOptionsSede" id="datalistSede" name="co_sede" placeholder="Busca Sede" value="{{@$element->co_sede}}" autocomplete="off">
                <datalist id="datalistOptionsSede">
                    @foreach($elements_sede as $elements_sedes)
                        <option value="{{@$elements_sedes->co_sede}}">{{@$elements_sedes->no_sede}}</option>
                    @endforeach
                </datalist>
                
            </div>
        </div>

        <div class="form-group {{ $errors->has('esta_cate_equipo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Oficina<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            
            <input class="form-control" list="datalistOficina" name="co_oficina" id="oficina"placeholder="Busca Ofinina" value="{{@$element->co_oficina}}" autocomplete="off">
                <datalist id="datalistOficina">
                    <option value="{{@$element->co_oficina}}">{{@$element->no_oficina}}</option>
                </datalist>
                
            </div>
        </div>

        <div class="form-group {{ $errors->has('esta_cate_equipo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Cargo Laboral<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="datalistOptionsCargoLaboral" name="co_cargo_laboral" id="cargoLaboral" placeholder="Busca Cargo Laboral" value="{{@$element->co_cargo_laboral}}" autocomplete="off">
                <datalist id="datalistOptionsCargoLaboral">
                    @foreach($elements_cargoLaboral as $elements_cargoLaborals)
                        <option value="{{@$elements_cargoLaborals->co_cargo_laboral}}">{{@$elements_cargoLaborals->no_cargo_laboral}}</option>
                    @endforeach
                </datalist>
            </div>
        </div>

        <div class="form-group {{ $errors->has('esta_cate_equipo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Estado Trabajador<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <select id="estado_trabajaor" name="estado_trabajaor" class="form-control" autocomplete="off">
                    <option value="1" <?php if(@$element->est_trabajador==1){ print_r('selected');} ?> >ACTIVO</option>
                    <option value="0" <?php if(@$element->est_trabajador==0){ print_r('selected');} ?>>DESACTIVADO</option>
            </select> 
            </div>
        </div>

    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>



    
<script>


$("#datalistSede").on('input', function () {
    var val = this.value;

    $("#oficina").prop('disabled', true);
    $("#cargoLaboral").prop('disabled', true);
    $("#estado_trabajaor").prop('disabled', true);
    $("#submit-btn").prop('disabled', true);
    

    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/web-adm/oficinaTrabajador-adm-oficina/'+val,
        success: function (data) {
            
            $("#oficina").prop('disabled', false);
            $("#cargoLaboral").prop('disabled', false);
            $("#estado_trabajaor").prop('disabled', false);
            $("#submit-btn").prop('disabled', false);
            
            const list = document.getElementById('datalistOficina');
            for (let index = 0; index < data.length; index++) {
                let option = document.createElement('option');
                option.value = data[index].co_oficina;
                option.text=data[index].no_oficina; 
                list.appendChild(option);   
            }
            
        },
        error: function() { 
            console.log(data);
        }
    });    
});

$(document).ready(function() {
    $("#datalistColaborador").on("click", function(event) {
        $("#datalistColaborador").val("");
        
    });
    $("#datalistSede").on("click", function(event) {
        $("#datalistSede").val("");
    });
    $("#oficina").on("click", function(event) {
        $("#oficina").val("");
    });
    $("#cargoLaboral").on("click", function(event) {
        $("#cargoLaboral").val("");
    });
});
$("#cargoLaboral").on('input', function () {
    var colaborador=$("#datalistColaborador").val();
    var sede=$("#datalistSede").val();
    var oficina=$("#oficina").val();
    var cargo_laboral = this.value;


    $("#submit-btn").prop('disabled', true);

    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/web-adm/oficinaTrabajador-adm-oficina/'+colaborador+'/'+sede+'/'+oficina+'/'+cargo_laboral,
        success: function (data) {
            $("#submit-btn").prop('disabled', false);
            if(data=="si"){
                $("#cargoLaboral").val("");
                alert('El cargo laboral ya esta asignado');
            } 
        },
        error: function() { 
            console.log(data);
        }
    });
    
    
});


</script>