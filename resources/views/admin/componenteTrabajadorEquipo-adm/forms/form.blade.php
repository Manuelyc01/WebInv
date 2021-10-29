@section('cssAdicional')
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--imagenes-->
 @stop

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - COMPONENTE-EQUIPO-TRABAJADOR </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        
        <div class="form-group {{ $errors->has('id_componente') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Componentes<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <input class="form-control" list="datalistOptionsComponente"  name="id_componente" placeholder="Busca Componente" autocomplete="off" value="{{@$elementsCoEquiTraba->id_componente}}">
               
                <datalist id="datalistOptionsComponente">
                    @foreach($elements as $element)
                    
                        <option  value="{{$element->id_componente}}">{{$element->serie_componente}}&nbsp;{{$element->des_componente}}</option>
                    @endforeach
                </datalist>
            </div>
        </div>
        <div class="form-group {{ $errors->has('esta_ofi_traba_equi_compo') ? 'has-error' : '' }}">
            <label class="col-sm-2 control-label"><strong>Estado Componente Asignado<span class="required"> * </span></strong></label>
            <div class="col-sm-8">
            <select id="esta_ofi_traba_equi_compo" name="esta_ofi_traba_equi_compo" class="form-control" autocomplete="off">
                    <option value="0" <?php if(@$elementsCoEquiTraba->esta_ofi_traba_equi_compo==0){ print_r('selected');} ?>>DESACTIVADO</option>
                    <option value="1" <?php if(isset($elementsCoEquiTraba->esta_ofi_traba_equi_compo)==false){print_r('selected');}else {if(@$elementsCoEquiTraba->esta_ofi_traba_equi_compo==1){ print_r('selected');}} ?> >ACTIVO</option>
            </select> 
            </div>
        </div>
        @if(isset($imagenes))
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Imagenes de Entrega</strong></label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Imagenes de Entrega Cargados</strong></label>
            </div>
            <div class="container">
            <div class="row galeria" id="gal">
            @foreach($imagenes as $imagen)
            <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img src="{{ $imagen->url }}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-footer">
                        <div class="col-md-6">
                            <button id="btnDelete{{ $imagen->id }}" onclick="deleteImg('{{ $imagen->id }}')"type="button">Eliminar</button>
                            <label id="labDelete{{ $imagen->id }}" style="color:red" hidden >Eliminar Imagen?</label>
                        </div>
                        <div class="col-md-6" id="formDelete{{ $imagen->id }}" hidden>
                            <button onclick="eliminarImagen('{{ $imagen->id }}')"class="btnConfirm" type="button">Si</button>
                            <button onclick="dontDelete('{{ $imagen->id }}')" class="btnConfirm" type="button">No</button>
                        </div>
                        </div>
                    </div>
            @endforeach
            </div>
            </div>
        @else
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Immagenes de Entrega</strong></label>
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
                    <input type="button" class="btn btn-warning" value="Eliminar" style="background:red;">
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
        
        
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong></strong></label>
            <div class="col-sm-8">
                <input type="text" name="id_ofi_traba_equipo" id="id_ofi_traba_equipo" value="{{@$id_ofi_equi_trabajador}}" style="display: none;">
            </div>
        </div>  
    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>
</div>
@section('jsAdicional')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('vendor/ems/js/main.js') }}"></script>
    <script >
        function deleteImg(id){
            document.getElementById('labDelete'+id).hidden = false;
            document.getElementById('btnDelete'+id).hidden = true;
            document.getElementById('formDelete'+id).hidden = false;
        }
        function dontDelete(id){
            document.getElementById('labDelete'+id).hidden = true;
            document.getElementById('btnDelete'+id).hidden = false;
            document.getElementById('formDelete'+id).hidden = true;
        }
        function eliminarImagen(id){
            $(".btnConfirm").prop('disabled', true);
            $.ajax({
                type: 'GET', 
                url: '/web-adm/deleteImagen/'+id+'/4',
                success: function (data) {
                    const galeria = document.querySelector('#gal');
                    galeria.innerHTML=``;
                    for(let i=0;i<data.length;i++){
                        galeria.innerHTML+=`
                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img src="${data[i].url}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-footer">
                        <div class="col-md-6">
                            <button id="btnDelete${data[i].id}" onclick="deleteImg('${data[i].id}')" type="button">Eliminar</button>
                            <label id="labDelete${data[i].id}" style="color:red" hidden>Eliminar Registro?</label>
                        </div>
                        <div class="col-md-6" id="formDelete${data[i].id}" hidden>
                            <button onclick="eliminarImagen(${data[i].id})" class="btnConfirm" type="button">Si</button>
                            <button onclick="dontDelete(${data[i].id})" class="btnConfirm" type="button">No</button>
                        </div>
                        </div>
                    </div>
                    `;
                    }
                },
                error: function() { 
                console.log("No se pudo eliminar");
                }
            });
        }
    </script>
@stop