@section('cssAdicional')
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--imagenes-->
 @stop
<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Formularios de solicitud </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('descripcion_solicitud') ? 'has-error' : '' }}">
            {!! Form::stdText('Descripcion', 0, 'descripcion_solicitud', $errors) !!}
        </div>


        <div class="form-group {{ $errors->has('id_solicitud') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Tipo Solicitud<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" type="text" name="id_solicitud" id="id_solicitud" value="{{@$element->nom_solicitud}}" readonly>
            </div>
        </div>

        <div class="form-group {{ $errors->has('esta_soli_soli_ofi_equi_traba') ? 'has-error' : '' }}">
            <!-- {!! Form::stdText('Estado de la solicitud', 0, 'esta_soli_soli_ofi_equi_traba', $errors) !!}-->
            <?php
            $ddlEstado=["2"=>"RECIBIDO","1"=>"EN PROCESO","0"=>"FINALIZADO"];
            ?>
            {!! Form::stdSelect('Estado de la solicitud', 0, 'esta_soli_soli_ofi_equi_traba', $ddlEstado, null) !!}
        </div>

        @if($element->id_ofi_traba_equipo)
        <div class="form-group {{ $errors->has('id_ofi_traba_equipo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Trabajador<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" placeholder="" type="text" value="{{ $equipotrajador->ap_paterno_colaborador }}&nbsp;{{ $equipotrajador->ap_materno_colaborador }}&nbsp;{{ $equipotrajador->no_colaborador }}&nbsp;{{ $equipo->des_equipo }}&nbsp;{{ $equipotrajador->no_equipo }} " readonly>
            </div>
        </div>
        @endif

        @if($element->id_ofi_trabajador)
        <div class="form-group {{ $errors->has('id_ofi_traba_equipo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Trabajador<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" placeholder="" type="text" value="{{ $trabajador->ap_paterno_colaborador }}&nbsp;{{ $trabajador->ap_materno_colaborador }}&nbsp;{{ $trabajador->no_colaborador }}" readonly>
            </div>
        </div>
        @endif

       
        @if(!isset($element))
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Imagenes</strong></label>
            <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Documentos</strong></label>
            <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept=".pdf,.doc,.docx,.xlsx">
        </div> 
        @else
        <div class="container">
            <div class="row">
                <table  class="display table table-hover dataTable">
                    <thead>
						<th>Documentos</th>
						<th></th>
                    </thead>
                    <tbody id="docs">
                    @foreach ($documentos as $doc)
                        <tr>
                            <td><span class="menu-icon glyphicon glyphicon-book" style="float:left; margin-bottom:4px"></span>
                            <a href="{{ $doc->url }}" target="_blank">{{ $doc->nom_documento }}</a>
                            </td>
                            <td>
                            <div class="col-md-3">
                                <button type="button" id="btnDelete{{ $doc->id_documento }}" onclick="deleteDoc('{{ $doc->id_documento }}')">Eliminar</button>
                                <label id="labDelete{{ $doc->id_documento }}" style="color:red" hidden>Eliminar Documento?</label>
                            </div>
                            <div class="col-md-3" id="formDelete{{ $doc->id_documento }}"  hidden>
                                <button type="button" onclick="eliminarDoc('{{ $doc->id_documento }}')"class="btnConfirm">Si</button>
                                <button type="button" onclick="dontDelete('{{ $doc->id_documento }}')" class="btnConfirm">No</button>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">   
                <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Documentos</strong></label>
                <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept=
                            "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                            text/plain, application/pdf,">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col s12 center-align"><a href="/web-adm/solOfiTrabEqui-img/{{ $element->id_soli_ofi_equi_tra }}"target="_blank" class="btn btn-secondary"> Imagenes de Equipo Asignado</a></div>
        </div>  
        @endif
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









@section('jsAdicional')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('vendor/ems/js/main.js') }}"></script>
    <script >
        function deleteDoc(id){
            document.getElementById('labDelete'+id).hidden = false;
            document.getElementById('btnDelete'+id).hidden = true;
            document.getElementById('formDelete'+id).hidden = false;
        }
        function dontDelete(id){
            document.getElementById('labDelete'+id).hidden = true;
            document.getElementById('btnDelete'+id).hidden = false;
            document.getElementById('formDelete'+id).hidden = true;
        }
        function eliminarDoc(id){
            $(".btnConfirm").prop('disabled', true);
            $.ajax({
                type: 'GET', 
                url: '/web-adm/deleteDoc/'+id+'/2',
                success: function (data) {
                    const documentos = document.querySelector('#docs');
                    documentos.innerHTML=``;
                    for(let i=0;i<data.length;i++){
                        documentos.innerHTML+=`
                        <div class="row">
                            <div class="col-md-6">
                                <a href="${data[i].url}" target="_blank">${data[i].nom_documento}</a> 
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="btnDelete${data[i].id_documento}" onclick="deleteDoc(${data[i].id_documento})">Eliminar</button>
                                <label id="labDelete${data[i].id_documento}" style="color:red" hidden>Eliminar Documento?</label>
                            </div>
                            <div class="col-md-3" id="formDelete${data[i].id_documento}"  hidden>
                                <button type="button" onclick="eliminarDoc(${data[i].id_documento})"class="btnConfirm">Si</button>
                                <button type="button" onclick="dontDelete(${data[i].id_documento})" class="btnConfirm">No</button>
                            </div>
                        </div>
                        `;
                    }
                },
                error: function() { 
                alert("No se pudo eliminar registro");
                }
            });
        }
    </script>
@stop